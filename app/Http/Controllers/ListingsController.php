<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Listing;

class ListingsController extends Controller
{
    public function main(){
        return view('listings',
                    [
                        'heading' => 'Latest Listings',
                        'listings' => Listing::all()
                    ]
        );
    }
    public function find(Listing $listing){
        return view(
            'listing',
            [
                'listing' => $listing
            ]
        );
    }
}
