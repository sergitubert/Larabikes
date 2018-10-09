<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bikes.list-bikes', array(
            'bikes' =>  Bike::orderBy('id', 'DESC')->paginate(5),
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bikes.create-bike');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|max:32',
            'modelo' => 'required|max:32',
            'precio' => 'required|numeric',
            'kms' => 'required|integer',
            'matriculada' => 'sometimes'
        ]);
        Bike::create($request->all());
        return redirect('bikes')->with('success', 'Moto añadida satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('bikes.bike-detail', array(
            'bike' => Bike::findOrFail($id)
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('bikes.edit-bike', array(
           'bike' => Bike::findOrFail($id)
        ));
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
        $request->validate([
            'marca' => 'required|max:32',
            'modelo' => 'required|max:32',
            'precio' => 'required|numeric',
            'kms' => 'required|integer',
            'matriculada' => 'sometimes'
        ]);
        Bike::findOrFail($id)->update($request->all() + ['matriculada' => 0]);
        return back()->with('success', 'Moto actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bike::findOrFail($id)->delete();
        return redirect('bikes')->with('success', 'Moto eliminada correctamente');
    }

    public function confirmDelete($id) {
        return view('bikes.delete-bike', array(
           'bike' => Bike::findOrFail($id)
        ));
    }
}
