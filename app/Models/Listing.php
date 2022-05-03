<?php

namespace App\Models;

class Listing {
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => '
                Lorem ipsum dolor sit, amet consectetur 
                adipisicing elit. In error beatae corrupti 
                ullam ipsam dignissimos qui harum voluptatem odit quaerat?
            '
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => '
                Lorem ipsum dolor sit, amet consectetur 
                adipisicing elit. In error beatae corrupti 
                ullam ipsam dignissimos qui harum voluptatem odit quaerat?
            '
            ],
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