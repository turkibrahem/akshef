<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\doc;
use App\article;
use App\disease;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::count();
        $doc= doc::count();
        $art= article::count();
        $dis=disease::count();
        $x=$dis+$art;
        $usertable = User::orderBy('created_at','desc')->paginate(3);
        $doctortable = doc::orderBy('created_at','desc')->paginate(3);
        $articletable = article::orderBy('created_at','desc')->paginate(3);
        return view('dashboard.admin')->with(['user'=>$user,'doc'=>$doc,'art'=>$art,'ut'=>$usertable,'doct'=>$doctortable,'artt'=>$articletable,'x'=>$x]);
    }
    public function userindex(){
    $user=User::all();
    return view('admincont.index')->with('user',$user);
    }
    public function doctorindex(){
        $doc=doc::all();
        return view('admincont.doctor')->with('doc',$doc);
        }
    public function showddocart($id)
    {
        $doc = doc::find($id);
        $art = article::where("doc_id", "=", $doc->id)->get();
        return View ("admincont.showart")->with(["doc" => $doc, "art" => $art]);
           
    }
    
    public function docedit($id)
    {
    
        $doc = doc::find($id);
        return view('admincont.docedit')->with('doc', $doc);
    }
    public function docupdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'specialty' => 'required',
            'telephone' => 'required',
            'Address' => 'required'  ,
            'password'=>  'required'  
        ]);

        $doc = doc::find($id);
        $doc->name= $request->input('name');
        $doc->email= $request->input('email');
        $doc->specialty= $request->input('specialty');
        $doc->telephone= $request->input('telephone');
        $doc->Address= $request->input('Address');
        $doc->Password=bcrypt($request->input('password'));
        $doc->save();
        return redirect('/admin')->with('success','Doctor updated successfully');
    }

    public function addoctor()
    {
            return view('admincont.Dcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function docstore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'specialty' => 'required',
            'telephone' => 'required',
            'Address' => 'required'  ,
            'password'=>  'required'  
        ]);

        $doc = new doc;
        $doc->name= $request->input('name');
        $doc->email= $request->input('email');
        $doc->specialty= $request->input('specialty');
        $doc->telephone= $request->input('telephone');
        $doc->Address= $request->input('Address');
        $doc->Password=bcrypt($request->input('password'));
        $doc->save();
        return redirect('/admin')->with('success','Doctor added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
       if ($user != null) {
        $user->delete();
        return redirect('/admin');
    }

    }
    public function docdestroy($id)
    {
        $doc = doc::find($id);
       if ($doc != null) {
        $doc->delete();
        return redirect('/admin')->with('success','Doctor Deleted successfully');
    }
}
public function article(){
    $art = article::orderBy('created_at','desc')->paginate(10);
    $dis= disease::orderBy('created_at','desc')->paginate(10);
    return view('admincont.art')->with('art',$art)->with('dis',$dis);

}
    
public function artdestroy($id)
{
    $doc = article::find($id);
   if ($doc != null) {
    $doc->delete();
    return redirect('/admin')->with('success','Article Deleted successfully');
}
}
public function disdestroy($id)
{
    $doc = disease::find($id);
   if ($doc != null) {
    $doc->delete();
    return redirect('/admin')->with('success','the article of diseases Deleted successfully');
}
}
}