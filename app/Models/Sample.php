<?php

namespace App\Models;

class Sample{

    public static function all(){
        return [
            [
            'id' => 1,
            'title' => 'listings one',
            'description' => 'this is description'
        ],
        [
            'id' => 2,
            'title' => 'listings two',
            'description' => 'this is description'
        ]
        ];
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
  