@extends('../layouts/user-layout')
@section('content')

<!-- PAGE : create Photos -->
    <section id="createPhotos" class="pt-page page-layout contact light-text">
        <!-- .content -->
        <div class="content">
            <!-- .layout-medium -->
            <div class="layout-medium">

                <!-- page-title -->
                <h1 class="page-title">create Photos</h1>
                <!-- page-title -->

                <!-- .contact-form -->
                <div class="contact-form">

                    <form id="contact-form" enctype="multipart/form-data" class="validate-form" method="post" action="{{url('user/photo/store')}}">
                        @csrf

                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" name="title" class="form-control" id="Title" placeholder="Gallery Name">
                        </div>

                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" name="description" id="Description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" name="description" id="Description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="cover">Photo/s</label>
                            <label class="custom-file-upload">
                                <input accept="image/*" name="images[]" type='file' id="imgInp" multiple/>
                                <i class="fa fa-cloud-upload"></i> Custom Upload
                                <img id="blah" src="#" alt="your image" />
                                <script>imgInp.onchange = evt => {
                                        const [file] = imgInp.files
                                        if (file) {
                                            blah.src = URL.createObjectURL(file)
                                        }
                                    }</script>
                            </label>

                        </div>

                        <button type="submit" class="btn btn-primary">update my gallery</button>

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
<!-- PAGE : create Photos -->

<!-- InstanceEndEditable -->


@endsection
