<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centers;
use App\Models\Regions;
use DB;
class Center extends Controller
{
    public function index(){
        $centers = DB::table('centers')
        ->join('regions','regions.id' ,'=','centers.region_id')
        ->select('regions.region_name','regions.region_code','centers.id','centers.center_name','centers.center_code' , 'centers.email' 
        , 'centers.contact','centers.address','centers.status')
        ->where('centers.is_delete',0)
        ->get('centers');
        
        return view('center.manage_center',compact('centers'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'region_id'     =>'required',
            'center_name'   => 'required',
            'center_code'   => 'required',   
            'email'         => 'required',
            'contact'       => 'required',
            'address'       => 'required',
     ]);
     $center = new Centers();
     $center->region_id     = $request->region_id;
     $center->center_name   = $request->center_name;
     $center->center_code   = $request->center_code;
     $center->email         = $request->email;
     $center->contact       = $request->contact;
     $center->address       = $request->address;
     $center->save();
     return redirect()->back()->with('success', 'Center created successfully');     
    }

    public function create(){
        $regions = DB::table('regions')->get();
        return view('center.center',compact('regions')); 
    }


}
