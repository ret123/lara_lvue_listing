<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Index/Index', [
            'message' => 'Hello From Inertia'
        ]);
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
