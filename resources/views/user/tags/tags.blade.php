@extends('../layouts/user-layout')
@section('content')

    <!-- PAGE : myGallery -->
    <section id="tags" class="pt-page page-layout contact light-text">
        <!-- .content -->
        <div class="content">
            <!-- .layout-medium -->
            <div class="layout-medium">

                <!-- page-title -->
                <h1 class="page-title">All Tags</h1>
                <!-- page-title -->

                <!-- .contact-form -->
                <div class="contact-form">
                    <a href="{{url('user/tags/create')}}#/tags"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Create Tag</a>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th >#</th>
                            <th>Tage Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <th >{{$tag->id}}</th>
                                <td>{{$tag->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
