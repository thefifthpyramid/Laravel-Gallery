<?php

namespace App\Http\Controllers;

use App\Models\photos;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Auth;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $photo_data = photos::paginate(5);
        $All_user = User::all();
        $userGallery = User::with('gallery')->get();
        return view('photos',compact(['photo_data','All_user','userGallery']));
    }
    public function photo_detail($id)
    {
        $AllPhotos = photos::where('id',$id)->first();
        $gallery_detail = Gallery::where('id',$AllPhotos->gallery_id)->first();

        $array = explode('|', $AllPhotos->photo);
        $cover = array_shift($array);

        //return $AllPhotos;
        return view('photo-detail',compact(['AllPhotos','gallery_detail','cover']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $input = $request->all();
        $images = array();
        if($files = $request->file('images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('images',$name);
                $images[]=$name;
            }
        }
        /*Insert your data*/
        photos::insert( [
            'gallery_id'    => "4",
            'user_id'    => Auth::user()->id,
            'photo'         =>  implode("|",$images),
            'title'         =>  $input['title'],
            'description'   =>  $input['description'],
            //you can put other insertion here
        ]);
        return redirect('user#/home');
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
