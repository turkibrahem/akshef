<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consultation;
use Auth;
use App\doc;
use App\article;
use App\disease;
use DB;

class doctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $cons=DB::select("SELECT id, Consultation , Answer FROM consultations where doc_id =$user_id");    
        return  view('dashboard.doctor')->with('cons',$cons);
    }


    public function edit($id)
    {
    
        $cons = consultation::find($id);
        return view('doctorcont.answer')->with('cons', $cons);
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
            'Answer' => 'required'
        ]);

        $cons = consultation::find($id);
        $cons->Answer= $request->input('Answer');
        $cons->save();
        return redirect('/doctor');
    }
    public function dis(){
        $dis= disease::orderBy('id','asc')->paginate(5);
        return view('doctorcont.disease')->with('dis',$dis);
    }

    public function disstore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'content' => 'required',
        ]);

        $dis = new disease;
        $dis->name = $request->input('name');
        $dis->content = $request->input('content');
        $dis->category = $request->input('cat');
        $dis->link=$request->input('cat');
        $dis->doc_id = auth()->user()->id;
        $dis->save();

        return redirect('/doctor')->with('success', 'article Created');
    }
    public function article(){
        $art= article::orderBy('id','asc')->paginate(6);
        return view('doctorcont.art')->with('art',$art);
    }

    public function artstore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'content' => 'required',
        ]);

        $art = new article;
        $art->name = $request->input('name');
        $art->content = $request->input('content');
        $art->category = $request->input('cat');
        $art->link=$request->input('cat');
        $art->doc_id = auth()->user()->id;
        $art->save();

        return redirect('/doctor')->with('success', 'article Created');
    }
    public function showarticle($id){
        $art = article::where("doc_id", "=", $id)->get();
        $dis = disease::where("doc_id", "=", $id)->get();
        return View ("doctorcont.show")->with(["art"=>$art, 'dis'=>$dis]);
    }
    
    public function destroy($id)
    {
        $art = article::find($id);
       if ($art != null) {
        $art->delete();
        return redirect('/doctor')->with('success','تم حذف المقال');
    }
    }

    public function editart($id){
        $art=article::find($id);
        $article= article::orderBy('id','asc')->paginate(6);
        return view("doctorcont.edit")->with(['art'=>$art,'article'=>$article]);

    }
    public function artupdate(Request $request, $id)
    {
    $this->validate($request, [
        'name' => 'required',
        'content' => 'required'

    ]);

    $art = article::find($id);
    $art->name = $request->input('name');
    $art->content = $request->input('content');
    $art->category = $request->input('cat');
    $art->link=$request->input('cat');
    $art->doc_id = auth()->user()->id;
    $art->save();
    return redirect('/doctor')->with('success', 'article Updated');
}
public function editdis($id){
    $dis=disease::find($id);
    $disease= disease::orderBy('id','asc')->paginate(6);
    return view("doctorcont.disedit")->with(['dis'=>$dis,'disease'=>$disease]);

}
public function disupdate(Request $request, $id)
{
$this->validate($request, [
    'name' => 'required',
    'content' => 'required'

]);

$dis = disease::find($id);
$dis->name = $request->input('name');
$dis->content = $request->input('content');
$dis->category = $request->input('cat');
$dis->link=$request->input('cat');
$dis->doc_id = auth()->user()->id;
$dis->save();
return redirect('/doctor')->with('success', 'diseases Updated');
}
public function Disdestroy($id)
    {
        $art = disease::find($id);
       if ($art != null) {
        $art->delete();
        return redirect('/doctor')->with('success','تم حذف المقال');
    }
    }
}
