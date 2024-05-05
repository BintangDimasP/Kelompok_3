<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Home';
        $icon = 'bi bi-house-fill';
        return view('home', ['pageTitle' => $pageTitle, 'icon' => $icon]);
    }
}
