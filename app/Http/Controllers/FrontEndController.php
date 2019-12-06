<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Category;
use App\Service;
class FrontEndController extends Controller
{
    //
    public function  index(){

        $data =[' '];
        $data['teaminfos'] = Team::all();
        $data['services'] = Service::paginate(12);
     
        return view('frontend.master', $data);
    }

    

    public function SingleTender($id){
        $data = [' '];
        $data['servicedetails']   = Service::where('id', $id)->first();

        return view('frontend.single_tender', $data);

    }

    function test(){
        return view('frontend.test');
    }
}
