<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::success('True', $reverse);
            return redirect('/');
        }
        else
        {
            Alert::error('False', $reverse);
            return redirect('/');
        }
    }
}
