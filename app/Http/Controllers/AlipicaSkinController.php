<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AlipicaSkinController extends Controller
{
    public function show()
    {
        return Inertia::render('/Skin/Alipicaskin', [
            // Here you can pass data to the view if needed
        ]);
    }
}
 