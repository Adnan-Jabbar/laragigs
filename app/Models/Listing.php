<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}