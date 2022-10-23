@extends('../layouts/user-layout')
@section('content')

    <!-- PAGE : myGallery -->
    <section id="tags" class="pt-page page-layout contact light-text">
        <!-- .content -->
        <div class="content">
            <!-- .layout-medium -->
            <div class="layout-medium">

                <!-- page-title -->
                <h1 class="page-title">Create Tags</h1>
                <!-- page-title -->

                <!-- .contact-form -->
                <div class="contact-form">

                    <form id="contact-form" enctype="multipart/form-data" class="validate-form" method="post" action="{{url('user/tags/store')}}">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="Title">name</label>
                            <input type="text" name="name" class="form-control" id="Title" placeholder="Gallery Name">
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>

                    </form>

                </div>
                <!-- .contact-form -->


                <!-- GOOGLE MAP -->
                <div class="map">
                    <div data-latitude="-25.363882" data-longitude="131.044922" data-zoom="5" data-marker-image="{{asset('Them/site/marker.png')}}" id="map-canvas" class="map-canvas"></div>
                </div>
                <!-- GOOGLE MAP -->


            </div>
            <!-- .layout-medium -->
        </div>
        <!-- .content -->
    </section>
    <!-- PAGE : myGallery -->

@endsection
