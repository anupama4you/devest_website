@extends('layouts.app')

@section('title', 'Our Business')

@section('content')

    @include('layouts.dark_navbar')

    <div class="container-md portfolio_post">
        <img class="left-image" src="{{ asset('images/icons/left.svg') }}" alt="">
        <img class="right-image" src="{{ asset('images/icons/right.svg') }}" alt="">

        <section class="section-1">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <!--portfolio title-->
                    <p class="main-title">نظام عضويات نادي الجزيرة</p>
                    <!--portfolio short description-->
                    <p class="description">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>

                    <!-- portfolio post -->
                    <img src="{{ asset('images/dummy.jpg') }}" alt="">

                    @for ($i = 0; $i < 3; $i++)
                    <p> مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...
                        وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.
                        وخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد. من كتاب "حول أقاصي الخير والشر"</p>

                    @endfor
                    <!-- portfolio post-->

                </div>
                <div class="col-md-2"></div>
            </div>
        </section>
    </div>

    @include('layouts.footer')

@endsection

