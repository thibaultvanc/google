<?php

namespace Organit\Google\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GoogleController extends Controller
{
    public function index(Request $request)
    {
        $var = 'testing Pachage Creation';
        return view('view::index', compact('var'));
    }
}
