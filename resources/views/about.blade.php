@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    @include('layouts.dark_navbar')

    <div class="container about_page">
            <section class="section-1">
                <div class="row">
                    <div class="col-md-6">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FDevestCompany%2Fvideos%2F168604305006116%2F&show_text=false&width=560&t=0" style="width:80%; height: 100%; border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>

                    <div class="col-md-6 align-items-end">
                        <p class="main-title">شركة تطوير برمجية متخصصة</p>
                        <p class="description">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                            <br>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
                        </p>
                        <button type="submit" class="btn btn-outline-danger btn-sm">ابدأ مشروعك</button>
                    </div>
                </div>
            </section>

            <section class="section-2">
                <div class="row">
                    <div class="col-md-7 align-items-end">
                        <div class="list-group">
                            <li class="list-group-item border-0">
                                <img src="{{ asset('images/icons/1.png') }}" alt="">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                            </li>
                            <li class="list-group-item border-0">
                                <img src="{{ asset('images/icons/2.png') }}"  alt="">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>
                            </li>
                            <li class="list-group-item border-0">
                                <img src="{{ asset('images/icons/3.png') }}"   alt="">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                            </li>
                            <li class="list-group-item border-0">
                                <img src="{{ asset('images/icons/4.png') }}"  alt="">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                            </li>
                        </div>

                    </div>

                    <div class="col-md-5 align-items-center" style="position: relative">
                        <img src="{{ asset('images/aboutus-vector.svg') }}" style="width: 70%; position: relative; margin-right: 20%;" alt="">
                    </div>
                </div>
            </section>


    </div>

        @include('layouts.footer')

@endsection
