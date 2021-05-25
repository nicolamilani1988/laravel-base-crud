<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospite;

class TestController extends Controller
{
    public function home(){

        $ospiti = Ospite::all();
        //dd($ospiti);
        return view('pages.home', compact('ospiti'));
    }

    public function guest($id){

        $ospite = Ospite::findOrFail($id);
        //dd($ospite);
        return view('pages.guest',compact('ospite'));
    }
}
