<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ParasitsController extends Controller
{
    public function show()
    {
        return Inertia::render('/Page/parasits', [
        ]);
    }
}