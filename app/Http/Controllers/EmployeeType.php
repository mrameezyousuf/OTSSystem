<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeTypes;
class EmployeeType extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee_type=EmployeeTypes::orderBy('id','desc')->get();
        return view('employee.employee_type',compact('employee_type'));
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
            'employee_type'      =>'required',
     ]);
        $employee_type = new EmployeeTypes();
        $input = $request->all();
        $emp_type = EmployeeTypes::create($input);
        if($emp_type){
            return redirect()->back()->with('success', 'Candidate created successfully'); 
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
