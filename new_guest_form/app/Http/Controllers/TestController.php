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
}
