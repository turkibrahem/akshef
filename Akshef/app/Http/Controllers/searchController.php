<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doc;
use App\article;

class searchController extends Controller
{
public function index(Request $request){
    $query=$request->get('query');
    $art=article::where('content','LIKE','%$query%')->get();
    $doc= doc::where('name','LIKE','%$query%')->get();
    return view('search.results')->with(['art'=>$art,'doc'=>$doc]);
}


}
