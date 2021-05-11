<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kendali extends Controller
{
    public function index()
    {
        $data = DB::table('murid')->paginate(5);
        return view('log',['datasiswa'=>$data]);


    }
    public function simpan(Request $request)
    {
        DB::table('murid')->insert(['nis'=>$request->nis,
                                    'nama'=>$request->nama,
                                    'kel'=>$request->kel,
                                    'kelas'=>$request->kelas,
                                    'alamat'=>$request->alamat
        ]);
        return redirect('/');
    }
    public function edit($nis){
        $data=DB::table('murid')->where('nis',$nis)->get();
        return view('edit',['siswa'=>$data]);
    }

    public function update(Request $request){
        DB::table('murid')->where('nis',$request->nis)->update(['nis'=>$request->nis,
        'nama'=>$request->nama,
        'kel'=>$request->kel,
        'kelas'=>$request->kelas,
        'alamat'=>$request->alamat
        ]);
        return redirect('/');
    }

    public function hapus($nis){
        DB::table('murid')->where('nis',$nis)->delete();
        return redirect('/');
    }


}
