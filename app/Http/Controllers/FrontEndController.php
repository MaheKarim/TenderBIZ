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

    function ager(){
        $data =[' '];
        $data['teaminfos'] = Team::all();
        $data['categories'] = Category::all();
        return view('frontend.extra', $data);
    }
}
