<?php

namespace App\Http\Controllers;

use App\Models\Artcile;
use Illuminate\Http\Request;

class ArtcileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backoffice.article');
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
     * @param  \App\Models\Artcile  $artcile
     * @return \Illuminate\Http\Response
     */
    public function show(Artcile $artcile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artcile  $artcile
     * @return \Illuminate\Http\Response
     */
    public function edit(Artcile $artcile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artcile  $artcile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artcile $artcile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artcile  $artcile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artcile $artcile)
    {
        //
    }
}
