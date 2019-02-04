<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use DB;
class adController extends Controller
{

    public function smooking()
    {
        $art = DB::select("SELECT * FROM article where category like'smooking'");
        return view('advices.smooking')->with('art', $art);
    
    
}
    public function workout()
    {
        $art = DB::select("SELECT * FROM article where category like'workout'");
        return view('advices.workout')->with('art', $art);
    
}
public function teeth()
{
    $art = DB::select("SELECT * FROM article where category like'teethbeauty'");
    return view('advices.teethb')->with('art', $art);

}
public function eyes()
{
    $art = DB::select("SELECT * FROM article where category like'eyeshealth'");
        return view('advices.eyeshealth')->with('art', $art);

}
public function bones()
{
    $art = DB::select("SELECT * FROM article where category like'strongbones'");
        return view('advices.strongbones')->with('art', $art);

}
public function food()
{
    $art = DB::select("SELECT * FROM article where category like'food'");
    return view('advices.food')->with('art', $art);

}

}
