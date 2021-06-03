@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    @include('layouts.dark_navbar')

    <div class="container-md contact_page">
        <section class="section-1">
            <div class="row">
                <div class="col-md-8 align-items-end">
                    <p class="main-title">ابقى على تواصل</p>
                    <p class="description">تساعدك علي الحصول علي الخدمة اللي ترضيك مع فريق من المتخصصين</p>
                    <!--contact us form-->
                    @include('layouts.contact_form')
                </div>
                <div class="col-md-4"></div>
            </div>
        </section>
    </div>

    @include('layouts.footer')


@endsection
