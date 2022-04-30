<?php

namespace App\Http\Controllers;

use App\Gateman;
use Illuminate\Http\Request;

class GatemanController extends Controller
{
    public function create(Request $request){
        $ID=$request['ID'];
        $Name=$request['Name'];
        $Contact_No=$request['Contact_No'];
        $SSN=$request['SSN'];
        $Address=$request['Address'];

        $gateman=new gateman();

        if($request->hasfile('image')){
            $filenamewithExt=$request->file('image')->getClientOriginalName();
            $filename =pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/uploads',$fileNameToStore);
            $gateman->picture=$fileNameToStore;
        }
        else{
            $gateman->picture="Null";
        }


        $gateman->ID=$ID;
        $gateman->Name=$Name;
        $gateman->Contact_No=$Contact_No;
        $gateman->SSN=$SSN;
        $gateman->Address=$Address;

        $gateman->save();

        return redirect()->back();
    }
    public function gateman(){
        $gatemans=Gateman::all();

        return view('showGateman',['gatemans'=>$gatemans]);

    }

    public function EditGateman($gateman_id){
        $gateman = gateman::findOrFail($gateman_id);

        return view('EditGateman', ['gateman'=>$gateman]);

    }

    public function update($gateman_id){
        $gateman = gateman::findOrFail($gateman_id);
        $gateman->Name = request()->input('Name');
        $gateman->Contact_No = request()->input('Contact_No');
        $gateman->SSN = request()->input('SSN');
        $gateman->Address = request()->input('Address');
        $gateman->update();

        return redirect()->route('gatemans.gateman');

    }

    public function destroy($gateman_id){
        Gateman::destroy($gateman_id);

        return redirect()->route('gatemans.gateman');

    }
}
