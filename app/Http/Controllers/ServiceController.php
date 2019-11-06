<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Str;
use App\Service;

class ServiceController extends Controller
{
    // show page
    public function show(){

        return view ('backend.service.show');
    }

    public function add(){

        return view('backend.service.add');
    }

    public function store(Request $request){

        $image = '';
        if($request->has('service_image')){
            $image = $request->file('service_image')->store('service_images');
         }

        $services                              = new Service();
        $services->service_tender_name         = $request->service_tender_name;
        $services->service_tender_description   = $request->service_tender_description;
        $services->service_tender_quantity     = $request->service_tender_quantity;
        $services->service_tender_any_price    = $request->service_tender_any_price;
        $services->service_image               = $image;
        $services->service_tender_area         = $request->service_tender_area;
        $services->save();


        session()->flash('success', 'Service Create Successfully!');
        return \redirect(route('showTender'));
    }
}
