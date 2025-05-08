<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

class QuestionnaireAdminController extends Controller
{
    public function index()
    {
        $forms = Form::with(['questions' => function($query) {
            $query->with('answers');
        }])->get();

        return Inertia::render('Questionnaire/Admin/Index', [
            'forms' => $forms
        ]);
    }

    public function getQuestionnaireData()
    {
        try {
            $forms = Form::with(['questions.answers'])->get();
            return response()->json([
                'success' => true,
                'forms' => $forms
            ]);
        } catch (\Exception $e) {
            Log::error('Error getting questionnaire data: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error loading questionnaire data'
            ], 500);
        }
    }

    public function createQuestion(Request $request)
    {
        try {
            $validated = $request->validate([
                'question' => 'required|string|max:255',
                'form_id' => 'required|exists:forms,id'
            ]);

            $question = Question::create([
                'question' => $validated['question'],
                'form_id' => $validated['form_id']
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pregunta creada exitosamente',
                'question' => $question
            ]);
        } catch (\Exception $e) {
            \Log::error('Error al crear pregunta: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error al crear la pregunta: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateQuestion(Request $request, Question $question)
    {
        try {
            // Capture all information from the request
            $fullRequest = $request->all();
            Log::info('Question update request received', [
                'question_id' => $question->id,
                'old_form_id' => $question->form_id,
                'data' => $fullRequest
            ]);

            $validated = $request->validate([
                'question' => 'required|string|max:255',
                'form_id' => 'required|exists:forms,id'
            ]);
            
            // Update question explicitly using validated fields
            $oldFormId = $question->form_id;
            $question->question = $validated['question'];
            $question->form_id = $validated['form_id'];
            $question->save();
            
            Log::info('Question successfully updated', [
                'id' => $question->id,
                'old_form_id' => $oldFormId,
                'new_form_id' => $question->form_id,
                'question' => $question->question
            ]);
            
            return response()->json([
                'success' => true,
                'message' => "Question updated in form #{$question->form_id}",
                'question' => $question
            ]);
        } catch (\Exception $e) {
            Log::error('Error updating question', [
                'error' => $e->getMessage(),
                'question_id' => $question->id,
                'request' => $request->all()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Error updating question: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteQuestion(Question $question)
    {
        try {
            $question->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Question successfully deleted'
            ]);
        } catch (\Exception $e) {
            Log::error('Error deleting question: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error deleting question'
            ], 500);
        }
    }

    public function createAnswer(Request $request)
    {
        try {
            $validated = $request->validate([
                'answer' => 'required|string|max:255',
                'father_question_id' => 'required|exists:questions,id',
                'child_question_id' => 'nullable|exists:questions,id',
                'recommendation' => 'nullable|string'
            ]);

            $answer = Answer::create($validated);
            
            return response()->json([
                'success' => true,
                'message' => 'Answer successfully created',
                'answer' => $answer
            ]);
        } catch (\Exception $e) {
            Log::error('Error creating answer: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error creating answer'
            ], 500);
        }
    }

    public function updateAnswer(Request $request, Answer $answer)
    {
        try {
            $validated = $request->validate([
                'answer' => 'required|string|max:255',
                'father_question_id' => 'required|exists:questions,id',
                'child_question_id' => 'nullable|exists:questions,id',
                'recommendation' => 'nullable|string'
            ]);

            $answer->update($validated);
            
            return response()->json([
                'success' => true,
                'message' => 'Answer successfully updated',
                'answer' => $answer
            ]);
        } catch (\Exception $e) {
            Log::error('Error updating answer: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error updating answer'
            ], 500);
        }
    }

    public function deleteAnswer(Answer $answer)
    {
        try {
            $answer->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Answer successfully deleted'
            ]);
        } catch (\Exception $e) {
            Log::error('Error deleting answer: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error deleting answer'
            ], 500);
        }
    }

    public function createForms (Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255'
        ]);

        $form = Form::create($validated);

        return redirect()->route('modify.questionnaire.index');
    }

    public function viewCreate()
    {
        $questionnaire = Form::all();
        return response()->json($questionnaire);
    }

    public function deleteForms ($form)
    {
        $forms = Form::findOrFail($form);
        $forms->delete();
        return redirect()->route('modify.questionnaire.index');
    }

    public function updateForms (Request $request, $id)
    {
        $title = $request->get("title");
        
        $event = Form::find($id);
        $event->title = $title;
        $event->save();

        return redirect()->route('modify.questionnaire.index');
    }

    public function showUpdate($id)
    {
        $forms = Form::where('id', '=', $id)->get();
        return Inertia::render('Questionnaire/Admin/EditQuestionnaires', [
            "forms" => $forms
        ]);

    }
} 