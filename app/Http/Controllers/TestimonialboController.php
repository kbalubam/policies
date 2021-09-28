<?php

namespace App\Http\Controllers;

use App\Models\Testimonialbo;
use Illuminate\Http\Request;

class TestimonialboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('backoffice.testimonialbo');
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
     * @param  \App\Models\Testimonialbo  $testimonialbo
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonialbo $testimonialbo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonialbo  $testimonialbo
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonialbo $testimonialbo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonialbo  $testimonialbo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonialbo $testimonialbo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonialbo  $testimonialbo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonialbo $testimonialbo)
    {
        //
    }
}
