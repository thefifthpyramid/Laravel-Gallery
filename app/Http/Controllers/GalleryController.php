<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\photos;
use Illuminate\Http\Request;
use Auth;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_data = Gallery::where('user_id',Auth::user()->id);
        //$gallery_data = Gallery::first();
        $photo_data = photos::paginate(5);
        return view('user.gallery-profile',compact(['gallery_data','photo_data']));
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
    public function store(Request $request){
        $request->validate([
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $coverName = time().'.'.$request->cover->extension();

        $request->cover->move(public_path('images'), $coverName);

        Gallery::create([
            'user_id'       => Auth::user()->id,
            'title'         => $request->title,
            'cover'         => $coverName,
            'description'   => $request->description,
        ]);

        return back()->with('success','You have successfully upload cover.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        //return Auth::user()->id;
        $data = Gallery::where('user_id', Auth::user()->id)->first();
        //return $data->title;
        $data->title = $request->title;
        $data->description = $request->description;
        if ($request->hasFile('cover')) {
            $request->validate([
                'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $coverName = time().'.'.$request->cover->extension();

            $request->cover->move(public_path('images'), $coverName);

            $data->cover = $coverName;
        }
        $data->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
