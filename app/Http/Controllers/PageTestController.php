<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageTestController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return Inertia::render('DynamicPage', [
            'title' => $page->title,
            'slug' => $page->slug,
            'subtitle' => $page->subtitle,
            'description' => $page->description,
            'content' => $page->content,
        ]);
    }
}
