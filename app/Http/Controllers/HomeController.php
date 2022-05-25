<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use mysql_xdevapi\BaseResult;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata=Content::limit(4)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata

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





}
