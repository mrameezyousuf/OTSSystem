<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;
class Department extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department=Departments::orderBy('id','desc')->get();
        return view('setting.department',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'department'=>'required',
        ]);
        $depart = new Departments();
        $input = $request->all();
        $department = Departments::create($input);
        if($department){
            return redirect()->back()->with('success','Department Created Successfully');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
