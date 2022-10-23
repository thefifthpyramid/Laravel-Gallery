@extends('layouts.app')
@section('content')
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{asset('them/img/hero.jpg')}}">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">Gallery Name : {{$gallery_detail->title}}</h2>
        </div>
        <div class="row tm-mb-90">
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="{{asset('images')}}/{{$cover}}" id="main_cover" alt="Image" class="img-fluid photo-detal-cover">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">{{$AllPhotos->description}}</p>
                    <div class="text-center mb-5">
                        <a href="{{asset('images')}}/{{$cover}}" download="{{$AllPhotos->title}}_{{$cover}}" class="btn btn-primary tm-btn-big">Download</a>
                    </div>
                    <div class="mb-4 d-flex flex-wrap">
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Dimension: </span><span class="tm-text-primary">1920x1080</span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Format: </span><span class="tm-text-primary">JPG</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">License</h3>
                        <p>Free for both personal and commercial use. No need to pay anything. No need to make any attribution.</p>
                    </div>
                    <div>
                        <h3 class="tm-text-gray-dark mb-3">Tags</h3>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Cloud</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Bluesky</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Nature</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Background</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Timelapse</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Night</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Real Estate</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Photos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            @php
                $imgs = explode('|', $AllPhotos->photo);
            @endphp
            @foreach($imgs as $photoItem)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5 sub_image">
                <figure class="effect-ming tm-video-item">
                    <img src="{{asset('images')}}/{{$photoItem}}" alt="Image" class="img-fluid ">
                    <figcaption class="d-flex align-items-center justify-content-center ">
                        <h2>{{$AllPhotos->title}}</h2>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">16 Oct 2020</span>
                    <span>12,460 views</span>
                </div>
            </div>
            @endforeach

        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->

    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>

@endsection
