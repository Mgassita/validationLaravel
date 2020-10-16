<?php

namespace App\Http\Controllers;

use App\Models\Statue;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function add(){
        return view('add');
    }
    public function show(){
        $statues= Statue::showOne();
        return view('show', ['statues' => $statues]); 
    }
}
