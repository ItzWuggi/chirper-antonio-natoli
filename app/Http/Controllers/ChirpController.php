<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    //
    public function create(){        
        return view('chirp.create',  compact('chirp'));
    }

    public function index(){
        return view('chirp.index');
    }

    public function show(Chirp $chirp){
        return view('chirp.show', compact('chirp'));
    }

    public function edit(Chirp $chirp){
        return view('chirp.edit', compact('chirp'));
    }

   

}
