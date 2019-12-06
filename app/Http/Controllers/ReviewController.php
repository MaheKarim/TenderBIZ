<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function show(){

        $data = [ ];
        
        return view('backend.review.show', $data);
    }
}
