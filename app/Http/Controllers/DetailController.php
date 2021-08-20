<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(){
        return view('Front.Home',[
            "title"=>"Data",
            "data" => \App\Models\Detail::all()
        ]);
    }

    public function show($slug){
        return view('Front.Detail',[
            "data" => \App\Models\Detail::find($slug)
        ]);
    }
}
