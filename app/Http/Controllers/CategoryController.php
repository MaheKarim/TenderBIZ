<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function show(){
        $data = [ ];
        return view ('backend.category.view', $data);
    }

    public function add(){
        $data = [ ];
        return view('backend.category.add', $data);
    }
    
    public function store(Request $request){
        $categories = new Category();
        $categories->categoy_name = $request->category_name;
        $categories->save();

        return \redirect(route('showCategory'));
    }
}
