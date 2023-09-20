<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\TrueOrFalseQuiz;

class TrueOrFalseQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $true_or_false_quizzes = TrueOrFalseQuiz::getAllOrderByUpdated_at();
        return response()->view('true_or_false_quiz.index',compact('true_or_false_quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('true_or_false_quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'problem' => 'required | max:191',
            'answer' => 'required',
        ]);

        if ($validator->fails()){
            return redirect()
              ->route('TrueOrFalseQuiz.create')
              ->withInput()
              ->withErrors($validator);
        }
        $result = TrueOrFalseQuiz::create($request->all());
        return redirect()->route('TrueOrFalseQuiz.index');
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
