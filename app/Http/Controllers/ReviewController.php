<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Review;

class ReviewController extends Controller
{
    //
    public function show(){

        $data = [ ];
        $data['reviews'] = Review::all();
        
        return view('backend.review.show', $data);
    }
    public function add(){

        $data = [ ];
        
        return view('backend.review.add', $data);
    }
    public function store(Request $request){

        $image = '';
        if($request->has('reviewer_image')){
            $image = $request->file('reviewer_image')->store('reviewer_images');
        }

        $reviews = new Review();
        $reviews->reviewer_name = $request->reviewer_name;
        $reviews->reviewer_designation = $request->reviewer_designation;
        $reviews->reviewer_review = $request->reviewer_review;
        $reviews->reviewer_image = $image;
        $reviews->save();
        session()->flash('success','Review Create & Show Succesfully!');
        return redirect(route('showReview'));
    }

    public function delete($id){
        
        $reviews=Review::findOrfail($id);
        $reviews->delete();

        session()->flash('success','Review Delete Succesfully!');
        return redirect(route('showReview'));
    }
}
