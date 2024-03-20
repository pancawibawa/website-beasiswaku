@extends('layouts.template')
@section('konten')
    <div class="hero_area">

        <!-- slider section -->
        <section class=" slider_section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="detail_box">
                            <h1>
                                Dapatkan Beasiswamu Sekarang !!
                            </h1>
                            <p>
                                Sekarang klaim beasiswa tidak perlu ribet cukup daftarkan namamu maka kamu akan mendapatkan
                                beasiswa
                            </p>
                            <a href="{{ route('login') }}" class="login_button">
                                Masuk / Daftar
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 offset-lg-1">
                        <img src="{{ asset('template/images/logo-beasiswa-logo.png') }}" alt=""
                            style="width: 100%; height: 100%;">
                    </div>
                </div>
        </section>
        <!-- end slider section -->

        

        
    </div>
@endsection
