<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\BidInfo;

class BidInfoController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function store(Request $request){
        if(!BidInfo::where('bidder_id', Auth::id())->exists()){
            BidInfo::insert([
                "service_id" => $request->service_id,
                "bidder_id" => Auth::id(),
                "bidamount" => $request->bidamount,
                "biddes" => $request->biddes,
                "created_at" => Carbon::now(),
            ]);

            return back();
        }else{
           echo " Already Placed One Bid!";
        }

    }

    public function approve(Request $request){
        if($request->mode == "approve"){
            $status = 1;
        }elseif($request->mode == "reject"){
            $status = 2;
        }
        BidInfo::findOrFail($request->bidId)->update([
            "status" => $status,
        ]);
        return back();
    }
}
