<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use DB;
class artController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $art = DB::select("SELECT * FROM article where name like':أهمية ممارسة الرياضة '");
        
      //return view('advices.workout')->with('art', $art);
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('art.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $art = new article;
        $art->name = $request->input('name');
        $art->content = $request->input('content');
        $art->save();
        return redirect('/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $art= article::find($id);
        return view('art.show')->with('art',$art);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art = article::find($id);
        return view('art.edit')->with('art', $art);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $art = Post::find($id);
        $art->title = $request->input('title');
        $art->body = $request->input('body');
        $art->save();
        return redirect('/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = article::find($id);
        $art->delete();
        return redirect('/posts');
}
}