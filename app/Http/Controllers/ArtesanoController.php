<?php

namespace nuyavi\Http\Controllers;

use nuyavi\Artesano;
use Illuminate\Http\Request;

class ArtesanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('artesano.index',['artedata'=>Artesano::all()]);
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
     * @param  \nuyavi\Artesano  $artesano
     * @return \Illuminate\Http\Response
     */
    public function show(Artesano $artesano)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \nuyavi\Artesano  $artesano
     * @return \Illuminate\Http\Response
     */
    public function edit(Artesano $artesano)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \nuyavi\Artesano  $artesano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artesano $artesano)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \nuyavi\Artesano  $artesano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artesano $artesano)
    {
        //
    }
}
