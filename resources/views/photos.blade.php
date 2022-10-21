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
    {{--first row--}}
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Collections
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
            </div>
        </div>
        <div class="row tm-mb-90 tm-gallery">

            @foreach($photo_data as $data)
                @php
                $array = explode('|', $data->photo);
                $cover = array_shift($array);
                @endphp

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="{{asset('images')}}/{{$cover}}" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>{{$data->title}}</h2>
                            <a href="{{url('photo-detail',$data->id)}}">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">{{$data->created_at}}</span>
                        <span>9,906 views</span>
                    </div>
                </div>
            @endforeach
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                    <a href="javascript:void(0);" class="tm-paging-link">2</a>
                    <a href="javascript:void(0);" class="tm-paging-link">3</a>
                    <a href="javascript:void(0);" class="tm-paging-link">4</a>
                </div>
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    {{--Second row--}}
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
            </div>
        </div>
        <div class="row tm-mb-90 tm-gallery">
            @foreach($photo_data as $Alldata)
                @php
                    $imgs = explode('|', $Alldata->photo);
                @endphp
                @foreach($imgs as $data)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="{{asset('images')}}/{{$data}}" alt="Image" class="img-fluid">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>{{$Alldata->title}}</h2>
                            <a href="{{$Alldata->id}}" target="_black">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">{{$Alldata->created_at}}</span>
                        <span>9,906 views</span>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                    <a href="javascript:void(0);" class="tm-paging-link">2</a>
                    <a href="javascript:void(0);" class="tm-paging-link">3</a>
                    <a href="javascript:void(0);" class="tm-paging-link">4</a>
                </div>
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

@endsection
