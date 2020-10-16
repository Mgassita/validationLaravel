<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Statue extends Model
{
    use HasFactory;
    public static function addOne ($request){

        $statue= new Statue;
        $statue->name=$request->name;
        $statue->date=intval($request->date);
        $statue->origin=$request->origin;
        $statue->price=intval($request->price);
        $statue->artist_name=$request->artistName;
        $statue->save();
        return;
    }

    public static function showOne() {
        $statues = DB::table('statues')->get();
        return $statues;
    }

    public static function delOne($request) {
        Statue::destroy($request->id);
        return;
    }

    public static function modifyOne($request) {
        $statue =Statue::find($request->id);
        return $statue;
    }

    public static function updateOne($request) {
        $statue =Statue::find($request->id);
        $statue->name=$request->name;
        $statue->date=intval($request->date);
        $statue->origin=$request->origin;
        $statue->price=intval($request->price);
        $statue->artist_name=$request->artistName;
        $statue->save();
        return;
    }
}
