<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return (auth()->user()->user_type == 1) ? view('admin.home') : view('dashboard');
    }
}
