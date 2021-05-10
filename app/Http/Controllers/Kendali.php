<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kendali extends Controller
{
    public function index()
    {
        $data = DB::table('murid')->paginate(5);
        return view('murid',['databarang'=>$data]);


    }
    public function siswa()
    {
        return view('siswa');
    }
}
