<?php
use Illuminate\Support\Facades\Input;
use App\doc;
use App\article;
use App\disease;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*******************************Main Page*************************************************************/
Route::get('/landingpage', function () {
    return view('pages.home');
});

Route::get('ask', function () {
    return view('pages.ask');
});


Route::get('info', function () {
    return view('pages.healthinformation');
});

Route::get('diseas', function () {
    return view('pages.disease');
});

Route::get('try', function () {
    return view('layouts.try');
});
Route::get('visita', function () {
    return view('pages.visita');
});
Route::get('turky', function () {
    return view('turky');
});

Route::resource('/article', 'artController');
Route::resource('/control', 'superController');


/********************************************End*************************************************/


/*******************************************Disease***************************************************/
Route::get('heart','diseasesController@heart');
Route::get('bones','diseasesController@bones');
Route::get('cancer','diseasesController@cancer');
Route::get('eyes','diseasesController@eyes');
Route::get('teeth','diseasesController@teeth');

/********************************************End*************************************************/
/********************************************Advices*************************************************/
Route::get('workout',"adController@workout");
Route::get('food',"adController@food");
Route::get('eyeshealth',"adController@eyes");
Route::get('teethbeauty',"adController@teeth");
Route::get('smooking',"adController@smooking");
Route::get('strongbones',"adController@bones");


/********************************************End*************************************************/



/**********************************************Users********************************************************/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('home/create','HomeController@create');
Route::post('home/store', 'HomeController@store');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/show','AdminController@userindex');
    Route::get('showart/{id}', ['uses' => 'AdminController@showddocart', 'as' => 'show.art']);
    Route::get('/showdoctorarticle','AdminController@showddocart');
    Route::put('docupdate/{id}', ['uses' => 'AdminController@docupdate', 'as' => 'doc.update']);
    Route::get('docedit/{id}', ['uses' => 'AdminController@docedit', 'as' => 'doc.edit']);
    Route::get('/doctor','AdminController@doctorindex');
    Route::delete('doctor/{id}', ['uses' => 'AdminController@docdestroy', 'as' => 'doctor.destroy']);
    Route::delete('destroy/{id}', ['uses' => 'AdminController@destroy', 'as' => 'user.destroy']);
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/addDoctor', ['uses' => 'AdminController@addoctor', 'as' => 'doctor.add']);
    Route::post('/saveDoctor', ['uses' => 'AdminController@docstore', 'as' => 'doctor.save']);
    Route::get('/art','AdminController@article');
    Route::delete('art/{id}', ['uses' => 'AdminController@artdestroy', 'as' => 'art.destroy']);
    Route::delete('dis/{id}', ['uses' => 'AdminController@disdestroy', 'as' => 'dis.destroy']);




  });
  Route::prefix('doctor')->group(function() {
    Route::get('/login', 'Auth\doctorLoginController@showLoginForm')->name('doctor.login');
    Route::post('/login', 'Auth\doctorLoginController@login')->name('doctor.login.submit');
    Route::get('/', 'doctorController@index')->name('doctor.dashboard');
    Route::put('answer/{id}', ['uses' => 'doctorController@update', 'as' => 'answer.update']);
    Route::get('edit/{id}', ['uses' => 'doctorController@edit', 'as' => 'answer.edit']);
    Route::get('/logout', 'Auth\doctorLoginController@logout')->name('doctor.logout');
    Route::get('/article', ['uses' => 'doctorController@article', 'as' => 'art.doctor']);
    Route::post('/store', ['uses' => 'doctorController@artstore', 'as' => 'store.doctor']);
    Route::get('show/{id}',['uses' => 'doctorController@showarticle', 'as' => 'article.show']);
    Route::delete('delete/{id}', ['uses' => 'doctorController@destroy', 'as' => 'delete.art']);
    Route::get('art/{id}',['uses' => 'doctorController@editart', 'as' => 'art.edit']);
    Route::put('art/{id}',['uses' => 'doctorController@artupdate', 'as' => 'art.update']);
    Route::get('/disease', ['uses' => 'doctorController@dis', 'as' => 'dis.doctor']);
    Route::get('dis/{id}',['uses' => 'doctorController@editdis', 'as' => 'dis.edit']);
    Route::put('dis/{id}',['uses' => 'doctorController@disupdate', 'as' => 'dis.update']);
    Route::post('/storedisease', ['uses' => 'doctorController@disstore', 'as' => 'store.dis']);
    Route::delete('deletex/{id}', ['uses' => 'doctorController@Disdestroy', 'as' => 'delete.dis']);
  });

/********************************************End*************************************************/
/*********************************************Search*******************************************************/
Route::get ( '/', function () {
return view ( 'search.results' );
} );
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    if($q !="" && $q != "*" && $q != "/" && $q != "-" && $q != "+"  ){
        $doc= doc::where('name','LIKE','%'.$q.'%')->get();
        $art= article::where('name','LIKE','%'.$q.'%')->orWhere('content','LIKE','%'.$q.'%')->get();
        $dis= disease::where('name','LIKE','%'.$q.'%')->orWhere('content','LIKE','%'.$q.'%')->get();
        return view('search.results')->with('doc',$doc)->with('art',$art)->with('dis',$dis);
    }
    else
    return "<h3 style='color:red ; font-size:90px ; text-align:center ;'> "." الرجاء البحث بطريقه موضحه  "."</h3>" ;
 

});
/********************************************End*************************************************/
Route::get('doctors',function()
{
    $eye=DB::select("SELECT * FROM docs where specialty like'رمد'");    
    $heart=DB::select("SELECT * FROM docs where specialty like'قلب'");    
    $cancer=DB::select("SELECT * FROM docs where specialty like'أورام'");    
    $bones=DB::select("SELECT * FROM docs where specialty like'عظام'");    
    $teeth=DB::select("SELECT * FROM docs where specialty like'أسنان'");    
    return  view('pages.doctors')->with('eye',$eye)->with('heart',$heart)->with('cancer',$cancer)->with('bones',$bones)->with('teeth',$teeth);
});
/*************/
Route::get('about', function(){

return view('pages.about');
});
Route::get('team', function(){

    return view('pages.team');
    });
Route::get('callus', function(){

        return view('pages.callus');
        }); 
Route::get('policy', function(){

            return view('pages.policy');
            });
 Route::get('privacy', function(){
            
                return view('pages.privacy');
                });
 Route::get('rule', function(){
            
                    return view('pages.rule');
                    });
Route::get('QA', function(){
            
                        return view('pages.answer');
                        });
                
            

/***********/