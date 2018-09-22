<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function index()
    {
        return redirect()->to(env('APP_FRONTEND'));
    }
}
