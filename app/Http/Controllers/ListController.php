<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $search = $request->search;

        $query = Persons::query();

        if($search) {
            $query->where('Name', 'like', "%$search%");
        }

        $data = Persons::orderby('id','desc')->get();
        return view('list', compact('data'));
    }

    public function table()
    {
        $data = Persons::orderby('id','desc')->get();
        return view('tablelist', compact('data'));
    }

    public function showCard($id)
    {
        $data = Persons::where('id', $id)->first();
        // dd($data->all());
        return view('listCard', compact('data'));
    }

    public function edit($id) {
        $person = Persons::findOrFail($id);
        return view('edit', compact('person'));
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
    public function update($id, Request $request)
    {

        // dd($request->all());

        $person = Persons::findOrFail($id);

        $Photo = $request->photo->store('post');

        Persons::where('id', $person->id)->update([
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
