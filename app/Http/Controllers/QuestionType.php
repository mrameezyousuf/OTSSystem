<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionTypes;
class QuestionType extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $question_type=QuestionTypes::orderBy('id','desc')->paginate(10);
        return view('setting.question_type',compact('question_type'));
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
            'question_type' =>'required',
            'question_type_code' => 'required'   
     ]);
     $QuestionTypes = new QuestionTypes();
     $QuestionTypes->question_type = $request->question_type;
     $QuestionTypes->question_type_code = $request->question_type_code;
     $QuestionTypes->save();
     return redirect()->route('Question-type.index');

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
