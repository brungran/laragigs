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
    public function find($id){
        return view('listing', ['listing' => Listing::find($id)]);
    }
}
