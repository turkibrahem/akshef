<?php

namespace App\Http\Controllers;
use DB ;
use Illuminate\Http\Request;
use App\consultation;
use App\doc;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
     $cons = consultation::whereUserId(Auth::id())->get();
        return  view('home')->with('cons',$cons);

    }
    public function create()
    {
        $eye=DB::select("select * from docs where specialty like'رمد'");
        $heart=DB::select("select * from docs where specialty like'قلب'");
        $cancer=DB::select("select * from docs where specialty like'سرطان'");
        $teeth=DB::select("select * from docs where specialty like'اسنان'");
        $bones=DB::select("select * from docs where specialty like'عظام'");
        return view ('userscont.create')->with('eye',$eye)->with('teeth',$teeth)->with('heart',$heart)->with('cancer',$cancer)->with('bones',$bones);
        //return view ('pages.ask')->with('doc',$doc);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $this->validate($request, [
            'Consultation' => 'required'
           
        ]);
        
        $cons = new consultation;
        $cons->Consultation = $request->input('Consultation');
        $cons->doc_id = $request->input('doc');
        $cons->user_id = auth()->user()->id;
        $cons->save();
        return redirect('/home')->with('success','تم عمل الاستشارة');
    }


}
