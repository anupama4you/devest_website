@extends('layouts.app')

@section('title', 'Our Business')

@section('content')

    @include('layouts.dark_navbar')

<div class="container sub-pages-top">
    <section class="sub-page-inner">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 align-items-end">
                <div class="main-title">نحول الأفكار الى واقع ملموس</div>
                <div class="description">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</div>
                <button type="submit" style="margin-top: 30px" class="btn btn-outline-danger btn-lg">ابدأ مشروعك</button>
            </div>
        </div>
    </section>
    <section class="section-2">
    @for ($i = 0; $i < 3; $i++)
        <div class="row">
            <div class="col-md-4">

                <!--
                apple = <i class="fab fa-apple"></i>
                windows = <i class="fab fa-windows"></i>
                android = <i class="fab fa-android"></i>
                -->

                <div class="card mb-2">
                    <img class="card-img-top"
                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                        <span style="float: left;"><i class="fab fa-apple"></i></span>
                        <h4 class="card-title">تطبيق بيتس</h4>
                        <p class="card-text card-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img class="card-img-top"
                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                        <span style="float: left;"><i class="fab fa-windows"></i></span>
                        <h4 class="card-title">تطبيق بيتس</h4>
                        <p class="card-text card-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img class="card-img-top"
                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                        <span style="float: left;"><i class="fab fa-android"></i></span>
                        <h4 class="card-title">تطبيق بيتس</h4>
                        <p class="card-text card-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                    </div>
                </div>
            </div>
        </div>

        @endfor



    </section>
</div>


<div class="container-fluid" style="position: absolute; background-color: #0A0945">
    @include('layouts.footer')
</div>


@endsection
