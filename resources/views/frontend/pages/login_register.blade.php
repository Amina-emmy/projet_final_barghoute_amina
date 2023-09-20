@extends('layouts.page_structure.indexFront')
@section('content')
    <!-- breadcrumb start-->
    {{-- <style>
        .breadcrumb_bg {
            background: url({{ asset('storage/img/breadcrumb.png') }}) center;
        }
    </style> --}}
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Join Us</h2>
                            <p>Home <span>-</span> Log in / sign up</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================login_part Area =================-->
    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            @include("frontend.partials.modalRegister")
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>

                            <form class="row contact_form" action="{{ route('login') }}" method="POST">
                                @csrf
                                <!-- Email Address -->
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="email"
                                        :value="old('email')" placeholder="Email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 ms-5 text-danger" />
                                </div>
                                <!-- Password -->
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 ms-5 text-danger" />
                                </div>

                                <!-- Remember Me -->
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>

                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="lost_pass" href="{{ route('password.request') }}">
                                            forget password?
                                        </a>
                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
@endsection
