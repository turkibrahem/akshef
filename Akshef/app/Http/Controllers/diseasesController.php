<?php

namespace App\Http\Controllers;
use app\disease ;
use Illuminate\Http\Request;
use DB ;
class diseasesController extends Controller
{
    public function heart()
    {
        $dis = DB::select("SELECT * FROM diseases where category like'heart'");
        return view('diseases.heart')->with('dis', $dis);
    }

    public function bones()
    {
        $dis = DB::select("SELECT * FROM diseases where category like'bones'");
        return view('diseases.bones')->with('dis', $dis);   
    }

    public function teeth()
    {
        $dis = DB::select("SELECT * FROM diseases where category like'teeth'");
        return view('diseases.teeth')->with('dis', $dis);
    }

    public function cancer()
    {
        $dis = DB::select("SELECT * FROM diseases where category like'cancer'");
        return view('diseases.cancer')->with('dis', $dis);
    }

    public function eyes()
    {
        $dis = DB::select("SELECT * FROM diseases where category like'eyes'");
        return view('diseases.eyes')->with('dis', $dis);
    }

    
}
