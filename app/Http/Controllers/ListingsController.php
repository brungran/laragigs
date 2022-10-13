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
                        'listings' => Listing::all_listings()
                    ]
        );
    }
    public function single_listing($id){
        return view('listings',
                    [
                        'heading' => 'Latest Listings',
                        'listings' => Listing::find($id)
                    ]
        );
    }
}
