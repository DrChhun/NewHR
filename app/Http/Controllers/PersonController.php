<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CreatePerson');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $Photo = $request->photo->store('post');

        Persons::create([
            'Name' => $request->name,
            'Age' => $request->age,
            'Email' => $request->email,
            'Phone' => $request->phone,
            'Photo' => $Photo,
            'Experience' => $request->experience,
            'Education' => $request->education,
            'Living' => $request->living,
            'Position' => $request->position
        ]);

        // dd($request->photo);

        // dd($Photo);
        // dd($request->all());

        return view('Success');
    }

    public function succ()
    {
        return view('Success');
    }

    public function fail()
    {
        return view('fail');
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
