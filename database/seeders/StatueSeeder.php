<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statues')->insert([
            [
            'name'=> 'Huit muses',
            'date'=>'1862',
            'Origin'=> 'grecque',
            'price'=> '3600',
            'artist_name'=> 'Marie-Antoine Chenavard et Jean-Marie Pollet',
            ],       
            [
            'name'=> 'Huit muses2',
            'date'=>'1862',
            'Origin'=> 'grecque2',
            'price'=> '3600',
            'artist_name'=> 'Marie-Antoine Chenavard et Jean-Marie Pollet2',
            ],
            [
            'name'=> 'Huit muses3',
            'date'=>'1862',
            'Origin'=> 'grecque3',
            'price'=> '3600',
            'artist_name'=> 'Marie-Antoine Chenavard et Jean-Marie Pollet3',
            ]
        ]);
    }
}
