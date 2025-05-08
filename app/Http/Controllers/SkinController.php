<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class SkinController extends Controller
{
    public function show()
    {
        return Inertia::render('Page/Skinrecommendations', [
        ]);
    }
} 