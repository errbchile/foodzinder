<?php

namespace App\Http\Controllers;

use App\Directorio;
use Illuminate\Http\Request;
use App\Restaurant;

class DirectorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->input("palabra_busqueda")) {
            $palabra_busqueda = $request->input("palabra_busqueda");
            $restaurants = Restaurant::where('nombre', 'like', '%'.$palabra_busqueda.'%')->get();
        } else {
            $restaurants = Restaurant::all();
        }

        return view('directorio', ["request" => $request, "restaurants" => $restaurants]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Directorio  $directorio
     * @return \Illuminate\Http\Response
     */
    public function show(Directorio $directorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Directorio  $directorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Directorio $directorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Directorio  $directorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directorio $directorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Directorio  $directorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directorio $directorio)
    {
        //
    }
}
