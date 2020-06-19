<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Violated;
use App\ViolationAgent;
use App\Kinship;
use App\AgeRangesViolationAgent;

class ViolationAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Violated $violated)
    {
        return view('registrations.violationAgent', compact('violated'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Violated $violated)
    {
        dd($request->all());
        $violationAgent = new ViolationAgent();
        $kinship =  Kinship::where('kinship_name', $request['kinship'])->first();
        $agerange = AgeRangesViolationAgent::where('age_range', $request['age_range'])->first();
        $gender = Gender::where('gender',$request['gender'])->first();
        $violationAgent->AgeRangesViolationAgent()->associate($agerange);
        $violationAgent->Kinship()->associate($kinship);
        $violationAgent->save();

        return redirect()->route('violated.create')->with('message','Salvo com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
