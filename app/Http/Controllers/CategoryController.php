<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function show(){
        $data = [ ];
        $data['categories'] = Category::all();
        return view ('backend.category.view', $data);
    }

    public function add(){
        $data = [ ];
        return view('backend.category.add', $data);
    }
    
    public function store(Request $request){

        $categories = new Category();
        $categories->category_name = $request->category_name;
        $categories->save();

        session()->flash('success','Category Created Successfully!');
        return redirect(route('showCategory'));
    }

    
    public function edit($categoryId){
        $data = [ ];
        $data['categories'] = Category::find($categoryId);

        return view('backend.category.edit', $data);
    }

    public function update(Request $request){
        // validation
        $request->validate([
            'category_name' => 'required|min:3',
         ]);
         // update work
         $categories = Category::findOrfail($request)->first();
         $categories->category_name = $request->category_name;
         $categories->save();

         session()->flash('success','Category Successfully Updated!');
         return redirect(route('showCategory'));
    }


    public function delete($id){

        $categories = Category::find($id);
        $categories->delete();

        session()->flash('success','Category Deleted Successfully!');
        return redirect(route('showCategory'));
    }
}
