<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Payment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\BaseResult;

class HomeController extends Controller
{

    public static function mainMenulist(){

        return Menu::where('parent_id' , '=' , 0)->with('children')->get();


    }
    //

    public function index(){
        $page='home';
        $sliderdata=Content::limit(4)->get();
        $contentlist1=Content::limit(1)->get();
        $setting = Setting::first();
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'contentlist1'=>$contentlist1

        ]);
    }
    public function about(){

        $setting = Setting::first();
        return view('home.about',[
            'setting'=>$setting

        ]);
    }
    public function references(){

        $setting = Setting::first();
        return view('home.references',[
            'setting'=>$setting

        ]);
    }
    public function contact(){

        $setting = Setting::first();
        return view('home.contact',[
            'setting'=>$setting

        ]);
    }
    public function faq(){

        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist

        ]);
    }

    public function storemessage(Request $request){
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent , Thank you.');

    }
    public function storecomment(Request $request){
        // dd($request); // Chech your values
        $data = new Comment();
        $data->user_id = Auth::id(); // Logged in user id
        $data->content_id = $request->input('content_id');
        $data->subject = $request->input('subject');
        $data->comment = $request->input('comment');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('content',['id'=>$request->input('content_id')])->with('success','Your comment has been sent , Thank you.');

    }

    public function storepayment(Request $request){
        // dd($request); // Chech your values
        $data = new Payment();
        $data->user_id = Auth::id(); // Logged in user id
        $data->year = $request->input('year');
        $data->payment = $request->input('payment');
        $data->note = $request->input('note');
        $data->save();

        return redirect()->back()->with('success','Your donate has been sent , Thank you.');

    }

    public function content($id){

        $data=Content::find($id);
        $comments = Comment::where('content_id',$id)->where('status','True')->get();
        $payments = Payment::where('status','True')->get();
        $images = DB::table('images')->where('content_id', $id)->get();
        return view('home.content',[
            'data'=>$data,
            'images'=>$images,
            'comments'=>$comments,
            'payments'=>$payments
        ]);
    }

    public function menucontents($id){

        $menu=Menu::find($id);
        $contents = DB::table('contents')->where('menu_id', $id)->get();
        return view('home.menucontents',[
            'menu'=>$menu,
            'contents'=>$contents
        ]);
    }


    public function test(){
        return view('home.test');

    }

    public function parameter($id,$number){
       // echo 'Parameter 1:', $id;
       // echo '<br>Parameter 2:', $number;
        // echo '<br>Sum Parameter :', $number+$id;
        return view('home.test2',
        [
            'id' => $id,
            'number' => $number
        ]);


    }

    public function save(Request $request){
        //echo "Save Function<br>";
        //echo "First Name :",$_REQUEST["fname"];
        //echo "<br>Last Name :",$_REQUEST["lname"];
        return view('home.test',
            [
                'fname' => $_REQUEST["fname"],
                'lname' => $_REQUEST["lname"]
            ]);
    }

    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


}
