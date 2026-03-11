<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "Головна сторінка сайту";
    }

    public function about()
    {
        return "Це сторінка про проєкт";
    }
}