<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class AboutController extends Controller
{
    public function main(){
        return view('site.about', ['listings' => Listing::todos()]);
    }
}
