<?php

namespace App\Http\Controllers;

use App\RoomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/roomcat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('layouts/roomcat_update')->with('content', $request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoomCategory  $roomCategory
     * @return \Illuminate\Http\Response
     */
    public function show(RoomCategory $roomCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomCategory  $roomCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomCategory $roomCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomCategory  $roomCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomCategory $roomCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomCategory  $roomCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomCategory $roomCategory)
    {
        //
    }
}
