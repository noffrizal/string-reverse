<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReverseController extends Controller
{
    public function index(){
        return view('reverse');
    }

    public function reverse(Request $request){

        // function for String Reverse
        $string = $request->string;
        $reverse = strrev($string);

        if ($reverse == $string) {
            return redirect('/')->with('success', 'Text match = '.$reverse);

        }
        else
        {
            return redirect('/')->with('warning', 'Text does not match = '.$reverse);
        }
    }
}
