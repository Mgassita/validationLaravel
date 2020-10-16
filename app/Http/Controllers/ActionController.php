<?php

namespace App\Http\Controllers;

use App\Models\Statue;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function add(Request $request) {
        Statue::addOne($request);
        return redirect('/show');
    }
    public function del(Request $request) {
        Statue::delOne($request);
        return redirect('/show');
    }
    public function modify(Request $request){
        $statue = Statue::modifyOne($request);
        return view ('update', ['statue' => $statue]);
    }
    public function update(Request $request){
        Statue::updateOne($request);
        return redirect('/show');
    }
}
