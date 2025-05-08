<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Form;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\Log;

class DiagnosticController extends Controller
{
    // Show the form for skin
    public function showSkin()
    {
        return Inertia::render('Questionnaire/Diagnostic', [
            'formType' => 'skin',
            'formId' => 1
        ]);
    }

    // Show the form for hair
    public function showHair()
    {
        return Inertia::render('Questionnaire/Diagnostic', [
            'formType' => 'hair',
            'formId' => 2
        ]);
    }

    // Returns the first question of the questionnaire
    public function getFirstQuestion(Request $request)
    {
        try {
            $formId = $request->input('form_id');
            
            // Get the form
            $form = Form::findOrFail($formId);
            
            // Get the first question (assuming it's the question with the lowest ID)
            $question = Question::where('form_id', $form->id)
                               ->orderBy('id', 'asc')
                               ->first();
            
            if (!$question) {
                Log::error('No se encontraron preguntas para el formulario', ['form_id' => $form->id]);
                return response()->json([
                    'error' => 'No se encontraron preguntas para el cuestionario'
                ], 404);
            }
            
            // Get the possible answers for the first question
            $answers = Answer::where('father_question_id', $question->id)->get();
            
            return response()->json([
                'id' => $question->id,
                'question' => $question->question,
                'options' => $answers->map(function($answer) {
                    return [
                        'id' => $answer->id,
                        'text' => $answer->answer,
                        'next_question_id' => $answer->child_question_id,
                        'recommendation' => $answer->recommendation
                    ];
                })
            ]);
        } catch (\Exception $e) {
            Log::error('Error al obtener la primera pregunta: ' . $e->getMessage());
            return response()->json(['error' => 'Error al cargar la primera pregunta'], 500);
        }
    }
    
    // Returns the next question based on the selected answer
    public function getNextQuestion(Request $request)
    {
        try {
            $selectedAnswerId = $request->input('selected_answer_id');
            
            // Get the selected answer
            $selectedAnswer = Answer::findOrFail($selectedAnswerId);
            
            // If there is no next question, return the recommendation
            if (!$selectedAnswer->child_question_id) {
                return response()->json([
                    'finished' => true,
                    'recommendation' => $selectedAnswer->recommendation
                ]);
            }
            
            // Get the next question based on the selected answer
            $nextQuestion = Question::findOrFail($selectedAnswer->child_question_id);
            
            // Get the possible answers for the next question
            $answers = Answer::where('father_question_id', $nextQuestion->id)->get();
            
            return response()->json([
                'id' => $nextQuestion->id,
                'question' => $nextQuestion->question,
                'options' => $answers->map(function($answer) {
                    return [
                        'id' => $answer->id,
                        'text' => $answer->answer,
                        'next_question_id' => $answer->child_question_id,
                        'recommendation' => $answer->recommendation
                    ];
                })
            ]);
        } catch (\Exception $e) {
            Log::error('Error al obtener la siguiente pregunta: ' . $e->getMessage());
            return response()->json(['error' => 'Error al cargar la siguiente pregunta'], 500);
        }
    }
    
    // Get recommendations based on the questionnaire result
    public function getRecommendations(Request $request)
    {
        try {
            $formType = $request->input('form_type');
            $resultCode = $request->input('result_code');
            
            Log::info('Solicitando recomendaciones', [
                'form_type' => $formType,
                'result_code' => $resultCode
            ]);
            
            // Buscamos la recomendación en la base de datos
            $answer = Answer::where('recommendation', $resultCode)
                           ->orWhere('recommendation', 'like', '%' . $resultCode . '%')
                           ->first();
                
            if ($answer && $answer->recommendation) {
                // Si encontramos la respuesta, obtenemos la pregunta asociada
                $question = Question::find($answer->father_question_id);
                $questionText = $question ? $question->question : '';
                
                // Crear estructura de recomendación basada en los datos de la BD
                return response()->json([
                    'recommendations' => [
                        $resultCode => [
                            'title' => 'Tractament personalitzat',
                            'tips' => [
                                $answer->recommendation,
                                'Consulta amb un professional per a més detalls'
                            ],
                            'products' => []
                        ]
                    ]
                ]);
            }
            
            // Si no encontramos nada específico, devolvemos recomendaciones por defecto
            return response()->json([
                'recommendations' => [
                    $resultCode => [
                        'title' => 'Recomanacions generals',
                        'tips' => [
                            'Consulta amb un professional per obtenir un diagnòstic personalitzat',
                            'Mantén una rutina de cura regular',
                            'Utilitza productes adequats per al teu tipus'
                        ],
                        'products' => []
                    ]
                ]
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error al obtener recomendaciones: ' . $e->getMessage());
            return response()->json([
                'error' => 'Error al cargar las recomendaciones',
                'recommendations' => [
                    $resultCode => [
                        'title' => 'Recomanacions generals',
                        'tips' => [
                            'Consulta amb un professional per a un diagnòstic personalitzat',
                            'Mantén una rutina de cura regular'
                        ],
                        'products' => []
                    ]
                ]
            ]);
        }
    }
}