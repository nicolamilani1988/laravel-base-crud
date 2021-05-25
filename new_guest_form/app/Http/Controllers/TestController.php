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

    public function create(){

        return view('pages.guest_creation');
    }

    public function store(Request $request){

        $validate = $request -> validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'date_of_birth' => 'required|date',
            'document_type' => 'required|max:255',
            'document_number' => 'required|max:255',
        ]);  
        $ospite = Ospite::create($validate); 
        
        // PAGINA NUOVO OSPITE
        return redirect() -> route('guest', $ospite -> id);
        // PAGINA CONFERMA
        //return view('pages.guest_added', compact('ospite')); 
    }
}
