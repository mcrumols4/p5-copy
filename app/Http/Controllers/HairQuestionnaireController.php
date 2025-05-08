<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HairQuestionnaireController extends Controller
{
    public function show()
    {
        return Inertia::render('Questionari/HairQuestionnaire', [

        ]);
    }
}