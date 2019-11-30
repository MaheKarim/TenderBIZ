<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Service; 

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

    
    public function edit($id){
        $data = [ ];
        $data['categories'] = Category::find($id);

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

        if($id == 1){
            session()->flash('success','Category Deleted != Successfully');
            return redirect(route('showCategory')); 
        }
        $services = Service::where('category_name_id', $id)->get();
        foreach ($services as $service) {
            Service::find($service->id)->update([
                'category_name_id' => 1
            ]);
        }

        $categories = Category::find($id);
        $categories->delete();

        session()->flash('success','Category Deleted Successfully!');
        return redirect(route('showCategory'));
    }
}
