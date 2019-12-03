<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    // start code from here


    public function index(){
        $data = [ ];
        $data['teaminfos'] = Team::all();
        return view('backend.team.show', $data);
    }

    public function add(){
        $data = [ ];

        return view('backend.team.add', $data);
    }

    public function store(Request $request){
        
        $image = '';
         if($request->has('teammember_image')){
             $image = $request->file('teammember_image')->store('teammember_images');
         }

        //$data = [ ];
        $teaminfos = new Team();
        $teaminfos->teammember_name = $request->teammember_name;
        $teaminfos->teammember_designation = $request->teammember_designation;
        $teaminfos->teammember_image = $image;
        $teaminfos->save();

        session()->flash('success','Dokan Created successfully!');
        return redirect(route('showTeam'));
    }

    public function delete($id){

        $teaminfos = Team::find($id);
        $teaminfos->delete();

        session()->flash('success','Team Deleted Successfully!');
        return redirect(route('showTeam'));
    }
}
