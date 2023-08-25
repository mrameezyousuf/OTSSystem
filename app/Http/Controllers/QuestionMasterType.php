<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionMastersType;
class QuestionMasterType extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $QuestionMastersType=QuestionMastersType::orderBy('id','desc')->paginate(10);
        return view('question.question_subject_type',compact('QuestionMastersType'));
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
            'question_subject_type' =>'required',
     ]);
     $QuestionMastersType = new QuestionMastersType();
     $QuestionMastersType->question_subject_type = $request->question_subject_type;
     
     $QuestionMastersType->save();
     return redirect()->route('QuestionMasterType.index');
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
