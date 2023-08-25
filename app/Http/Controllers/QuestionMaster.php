<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\QuestionTypes;
use App\Models\QuestionMastersType;

class QuestionMaster extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Subjects=Subjects::orderBy('id','desc')->get();
        $question_type=QuestionTypes::orderBy('id','desc')->get();
        $QuestionMastersType=QuestionMastersType::orderBy('id','desc')->get();
        return view('question.create_question',compact('question_type','question_type','Subjects','QuestionMastersType'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('question.create_question');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
