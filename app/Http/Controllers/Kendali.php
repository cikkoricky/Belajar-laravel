<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kendali extends Controller
{
    public function index()
    {
        return view('siswa.index');
    }
}
