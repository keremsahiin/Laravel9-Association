<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\BaseResult;

class HomeController extends Controller
{
    //
    public function index(){
        echo "Index Function";
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
        echo "Save Function<br>";
        echo "First Name :",$_REQUEST["fname"];
        echo "<br>Last Name :",$_REQUEST["lname"];
        //return view('home.test2',
           // [
             //   'fname' => $_REQUEST["fname"],
             //   'lname' => $_REQUEST["lname"]
          //  ]);
    }





}
