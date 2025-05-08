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

class DynamicPageController extends Controller{
    
    public function getDynamicPage($id){
        $PageID = $id;

        $page = Page::where('slug', $PageID)->get();

        return Inertia::render('DynamicPage', [
            "pages" => $page,
            "flash" => session()->only(['success', 'error'])
        ]);
    }

    public function getAdvicePage($id){
        $PageID = $id;

        $page = Page::where('slug', $PageID)->get();

        return Inertia::render('AdvicePage', [
            "pages" => $page
        ]);
    }

    public function getEditorPage($id){
        $PageID = $id;

        $page = Page::where('slug', $PageID)->get();

        return Inertia::render('EditorPage', [
            "pages" => $page
        ]);
    }

    public function getPages(){
        // $pages = Page::all();
        $pages = Page::where('edit', true)->get();
        return Inertia::render('PageSelector', [
            "pages" => $pages
        ]);
    }

    public function filter($category) {
        if ($category == 'All') {
            $pages = Page::where('edit', true)->get();
            return $pages->toJson();
        }
        $pages = Page::where('category', $category)->where('edit', true)->get();
        return $pages->toJson();
    }
}