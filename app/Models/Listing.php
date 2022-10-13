<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public static function all_listings(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Quis sint enim irure enim amet nulla exercitation nostrud. Aute non non quis aliquip proident et sunt sit amet consectetur commodo magna laborum eiusmod. Ad irure anim mollit ut id eu enim reprehenderit amet duis. Eiusmod duis voluptate nisi est. Duis consequat officia fugiat laborum dolore tempor dolor labore ex mollit in.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Voluptate nulla amet ullamco commodo elit quis eiusmod occaecat magna reprehenderit ea magna. Cupidatat dolor irure qui ut. Amet dolore eiusmod excepteur Lorem deserunt officia aliquip dolor ullamco exercitation irure. Consequat irure tempor exercitation culpa dolore aute officia id minim.
                                  Lorem nisi consectetur deserunt eiusmod nulla ad velit laborum sint velit nulla. Incididunt tempor consectetur aliqua labore. Id esse exercitation pariatur cillum.'
            ]
        ];
    }

    public static function find($id){
        $listings = self::all_listings();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return [$listing];
            }
        }
    }
}
