<?php

namespace App\Http\Controllers;

use App\Models\Ventacab;
use Illuminate\Http\Request;

class VentacabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("venta");
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
     * @param  \App\Models\Ventacab  $ventacab
     * @return \Illuminate\Http\Response
     */
    public function show(Ventacab $ventacab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ventacab  $ventacab
     * @return \Illuminate\Http\Response
     */
    public function edit(Ventacab $ventacab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ventacab  $ventacab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventacab $ventacab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ventacab  $ventacab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ventacab $ventacab)
    {
        //
    }
}
