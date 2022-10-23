@extends('../layouts/user-layout')
@section('content')

    <!-- PAGE : HOME -->
    <section id="home" class="pt-page page-layout light-text home-section has-bg-img" style="background-image:url({{asset('Them/profile/images/site/home.png)')}}">
        <!-- .content -->
        <div class="content">
            <!-- .layout-medium -->
            <div class="layout-medium">

                <h4>Welcome Back</h4>
                <h3>{{ Auth::user()->name }}</h3>
                <h6>لاتنسي ذكر الله:  <strong id="typist-element" data-typist="سبحان الله, لا اله الا الله والله اكبر, الحمد لله.">سبحان الله والحمد لله ولا اله الا الله والله اكبر</strong></h6>

            </div>
            <!-- .layout-medium -->
        </div>
        <!-- .content -->
    </section>
    <!-- PAGE : HOME -->

@endsection
