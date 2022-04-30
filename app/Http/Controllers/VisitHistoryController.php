<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\visitHistory;
use App\visitor;


class VisitHistoryController extends Controller
{
    //

    public function createHistory($id){
        $visitor = visitor::findOrFail($id);

        $v=new VisitHistory();
        $v->visitor_name=$visitor->Name;
        $v->visitor_phone=$visitor->Contact_No;
        $v->visitor_email=$visitor->Email;
        $v->arrival_time=date('Y-m-d H:i:s');

        $v->leaving_time=date('Y-m-d H:i:s');
        $v->gateman_name=Auth::user()->name;
        $v->status="visiting";
        $visitor->status="visiting";
        $visitor->count=$visitor->count+1;
        $v->save();
        $visitor->save();

       return redirect()->back();

    }

    public function leavingHistory($id){
        //kaj baki ase
        $v = VisitHistory::findOrFail($id);

        $visitor = visitor::where('Email',$v->visitor_email)->first();

        $v->leaving_time=date('Y-m-d H:i:s');
        $v->status="left";
        $visitor->status="left";
        $v->update();
        // dd($visitor);
        $visitor->update();

        return redirect()->back();

    }

    public function historyView(){
        if (Auth::user()->status == "1"){
            $visitors=VisitHistory::all();
        }
         else{
            $visitors=VisitHistory::where('gateman_name',Auth::user()->name)->get();
         }

        return view('showHistory',['visitors'=>$visitors]);
    }

}
