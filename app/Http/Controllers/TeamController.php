<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    // start code from here


    public function index(){
        $data = [ ];

        return view('backend.team.show', $data);
    }

    public function add(){
        $data = [ ];

        return view('backend.team.add', $data);
    }

    public function store(Request $request){
        
        
        $data = [ ];
        $data['teaminfos'] = new Team();
        $data['teaminfos']->teammember_name = $request->teammember_name;
        $data['teaminfos']->teammember_designation = $request->teammember_designation;
        $data['teaminfos']->teammember_designation = $image;
        $data['teaminfos']->save();

        return redirect(route('showTeam'), $data);


    }
}
