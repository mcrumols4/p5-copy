<?php

namespace App\Http\Controllers;

use App\Models\Page;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class EditorController extends Controller
{
    public function updatePage(Request $request, $slug){
        $slug = $request->get("slug");
        $title = $request->get("title");
        $subtitle = $request->get("subtitle");
        $description = $request->get("description");
        $content = $request->get("content");
        
        $page = Page::where('slug', $slug)->get();
        $page[0]->title = $title;
        $page[0]->subtitle = $subtitle;
        $page[0]->description = $description;
        $page[0]->content = $content;

        $page[0]->save();

        return redirect(route('DynamicPage', $slug))->with('success', 'Página actualizada correctamente');
    }
}