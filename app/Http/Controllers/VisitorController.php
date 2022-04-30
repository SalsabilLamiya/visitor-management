<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function create(Request $request){
        $ID=$request['ID'];
        $Name=$request['Name'];
        $Contact_No=$request['Contact_No'];
        $Email=$request['Email'];
        $Address=$request['Address'];

        $visitor=new Visitor();

        $visitor->ID=$ID;
        $visitor->Name=$Name;
        $visitor->Contact_No=$Contact_No;
        $visitor->Email=$Email;
        $visitor->Address=$Address;
        $visitor->status="left";
        $visitor->count=0;


        $visitor->save();

        return redirect()->back();
    }
    public function index(){
        $visitors=Visitor::all();

        return view('showVisitor',['visitors'=>$visitors]);

    }

    public function edit($visitor_id){
        $visitor = visitor::findOrFail($visitor_id);

        return view('edit', ['visitor'=>$visitor]);

    }

    public function update($visitor_id){
        $visitor = visitor::findOrFail($visitor_id);
        $visitor->Name = request()->input('Name');
        $visitor->Contact_No = request()->input('Contact_No');
        $visitor->Email = request()->input('Email');
        $visitor->Address = request()->input('Address');
        $visitor->update();

        return redirect()->route('visitors.index');

    }

    public function destroy($visitor_id){
        Visitor::destroy($visitor_id);

        return redirect()->route('visitors.index');

    }
    public function topVisitor(){

        $visitor = Visitor::orderBy('count', 'DESC')->get();

        return view('topVisitorView', ['visitor'=>$visitor]);

    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        // dd($search);
    
        // Search in the title and body columns from the posts table
        if($search==null){
            $visitors=Visitor::all();

            return view('showVisitor',['visitors'=>$visitors]);
            
        }
        $visitors = Visitor::query()
            ->where('Contact_No', 'LIKE', "%{$search}%")
            ->orWhere('Email', 'LIKE', "%{$search}%")
            ->orWhere('Name', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('showVisitor', compact('visitors'));
    }
}
/////////////////////////////////////////////////////////////

/* <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitor;
class VisitorController extends Controller
{
    public function create(Request $request){
        $id=$request['id'];
        $Name=$request['Name'];
        $Contact_No=$request['Contact_No'];
        $Email=$request['Email'];
        $Address=$request['Address'];

        $visitor=new Visitor();

        $visitor->id=$id;
        $visitor->Name=$Name;
        $visitor->Contact_No=$Contact_No;
        $visitor->Email=$Email;
        $visitor->Address=$Address;

        $visitor->save();

        return redirect()->back();
    }
    public function index(){
        $visitor=visitor::all();
       // dd($visitor);

        return view('showVisitor',['visitor'=>$visitor]);

    }

    public function edit($visitor_id){
        $visitor = visitor::findOrFail($visitor_id);

        return view('edit', ['visitor'=>$visitor]);

    }

    public function update($visitor_id){
        $visitor = visitor::findOrFail($visitor_id);
        $visitor->Name = request()->input('Name');
        $visitor->Contact_No = request()->input('Contact_No');
        $visitor->Email = request()->input('Email');
        $visitor->Address = request()->input('Address');
        $visitor->update();

        return redirect()->route('visitors.index');

    }

    public function destroy($visitor_id){
        Visitor::destroy($visitor_id);

        return redirect()->route('visitors.index');

    }
} */
