<?php

namespace App\Http\Controllers;

use App\Parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parkings =  Parking::orderBy('id','ASC')->paginate(2);
        return view('parkings.index',compact('parkings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parkings.create');
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
            'parking_name'=> 'required',
            'parking_address' => 'required',
            'total_spaces' => 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'latitude' => 'required',
            'longitud' => 'required',
        ]);
        Parking::create($request->all());
        Session::flash('message','Parqueo creado correctamente');
        return redirect()->route('parkings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function show(Parking $parking)
    {
        // hola
        // hola
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function edit(Parking $parking)
    {
        return view('parkings.edit',compact('parking'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parking $parking)
    {
        $request->validate([
            'parking_name'=> 'required',
            'parking_address' => 'required',
            'total_spaces' => 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'latitude' => 'required',
            'longitud' => 'required',
        ]);
        $parking->update($request->all());
        Session::flash('message','Parqueo actualizado correctamente');
        return redirect()->route('parkings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parking $parking)
    {
        $parking->delete();
        Session::flash('message','Parqueo borrado correctamente');
        return redirect()->route('parkings.index');
    }
}
