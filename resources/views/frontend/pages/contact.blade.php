@extends('layouts.page_structure.indexFront')
@section('content')
    <!--================Home Banner Area =================-->
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
                            <h2>contact us</h2>
                            <p>Home <span>-</span> contact us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section padding_top">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map"></div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.3457546645086!2d-7.462458396286999!3d33.63028821226715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7ca69cacbcb29%3A0x7380c9a235048f71!2sIKEA%20Zenata!5e0!3m2!1sfr!2sma!4v1695218335808!5m2!1sfr!2sma"
                    width="1150" height="450" frameborder="0" style="border: 1px solid #ccc; border-radius: 5px;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action={{ route('contact.MailContact') }} method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="messageText" cols="30" rows="9" required
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @auth
                                        <input class="form-control" name="name" type="text"
                                            value="{{ auth()->user()->name }}" required onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                                    @endauth
                                    @guest
                                        <input class="form-control" name="name" type="text" required
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                            placeholder='Enter your name'>
                                    @endguest
                                </div>
                            </div>
                            <div class="col-sm-6">
                                @auth
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email"
                                            value="{{ auth()->user()->email }}" required onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                                    </div>
                                @endauth
                                @guest
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email" required
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                            placeholder='Enter email address'>
                                    </div>
                                @endguest
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" type="text" required
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder='Enter Subject'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn_3 button-contactForm">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    @foreach ($contactInfos as $info)
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>{{$info->city}}</h3>
                                <p>{{$info->adress}}</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>{{$info->phone}}</h3>
                                <p>{{$info->open_closeTime}}</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>{{$info->email}}</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
