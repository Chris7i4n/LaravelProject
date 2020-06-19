<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Violated; 
use App\AgeRange;
use App\Gender;
use App\Locality;
use App\Ethnicity;
use App\ViolationData;
use Auth;

class ViolatedController extends Controller
{

    // private $violated;

    // public function __contructor(Violated $violated)
    // {
    //     $this->violated = $violated;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrations.violated');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $violated = new Violated($request->all());  
        $violated->user_id = auth::user()->id;
        $gender = Gender::where('gender',$request['gender'])->first();
        $locality = Locality::where('locality_name',$request['locality'])->first();
        $ethnicity = Ethnicity::where('ethnicity', $request['ethnicity'])->first();
        $agerange = AgeRange::where('age_range', $request['age_range'])->first();
        $violated->gender()->associate($gender);
        $violated->locality()->associate($locality);
        $violated->ethnicity()->associate($ethnicity);
        $violated->agerange()->associate($agerange);
        $violated->save();
        
        return redirect()->route('violationdata.create',$violated->id);
        
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
