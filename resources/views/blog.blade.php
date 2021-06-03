@extends('layouts.app')

@section('title', 'Blog')

@section('content')

    @include('layouts.dark_navbar')

    <div class="blog_page">
    <div class="container-md sub-pages-top">
        <section class="sub-page-inner">
            <!-- recent post -->
            <div class="row">
                <div class="col-md-6">
                    <p style="float: right; margin-left: 20px">recent</p>
                    <p>category</p>
                    <p class="main-title">استراتيجية تجربة المستخدم</p>
                    <p class="description">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>
                    <p style="color: #707070; font-size: 15px">مايو, 2021</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/dummy.jpg') }}" style="width: 90%; height: auto;" alt="">
                </div>
            </div>

            <!-- space -->
            <section class="space">

            </section>

            <!-- navigation menu -->

            <div class="row">
                <div class="col-md-12">
                <nav class="navbar navbar-expand-md navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <form class="form-inline" style="margin-left: 30px">
                                <button class="btn btn-md btn-outline-primary" type="button">All categories</button>
                            </form>

                            <!-- all categories should be listed here-->
                            <li class="nav-item active">
                                <a class="nav-link" href="#">cat 1 <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">cat 2</a>
                            </li>
                            <!-- all categories should be listed here-->

                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <span style="padding: 5px 20px 5px 20px; margin-left: 5px; border-radius: 5px 5px 5px; border: 1px solid #98BFFF; ">
                                <a href=""><i class="fas fa-search"></i></a>
                            </span>
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </nav>
                </div>
            </div>

            <!-- navigation menu -->

            <div class="row">
            <div class="col-md-12">
            <div class="container blog_posts_cards">
                @for ($i = 0; $i < 6; $i++)
                <!-- blog post -->
                <div class="item">
                    <img src="{{ asset('images/dummy.jpg') }}" style="width: 100%; height: auto;" alt="">
                    <p class="category">category</p>
                    <p class="title">title</p>
                    <p class="date" style="color: #707070; font-size: 15px">date</p>
                </div>
                <!-- blog post-->
                @endfor

            </div>
            </div>
            </div>
        </section>
    </div>
    </div>

    @include('layouts.footer')

@endsection

