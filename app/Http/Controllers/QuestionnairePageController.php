<?php
namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class QuestionnairePageController extends Controller{
    public function getQuestionnairePage($id){
        $PageID = $id;

        $page = Page::where('slug', $PageID)->get();

        return Inertia::render('Questionari', [
            "pages" => $page
        ]);
    }
}