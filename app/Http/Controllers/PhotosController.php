<?php

namespace App\Http\Controllers;

use App\Models\photos;
use Illuminate\Http\Request;
use App\Models\Gallery;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $photo_data = photos::all();
        return view('photos',compact('photo_data'));
    }
    public function photo_detail()
    {
        return view('photo-detail');
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
     * @param  \App\Models\photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function show(photos $photos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function edit(photos $photos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, photos $photos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function destroy(photos $photos)
    {
        //
    }
}
