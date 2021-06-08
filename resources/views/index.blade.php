@extends('layouts.app')

@section('content')

    @include('layouts/navbar')

<!--header-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-md-4" ><p class="left_text"> نؤمن بقيمة منتجك وانك تستحق افضل مستوي خدمة</p></div>
            <div class="col-md-4 text-center"> <p class="main_text">شركاؤك نحو النجاح</p></div>
            <div class="col-md-4 text-right"><p class="right_text">نحن نبني حلولاً برمجية تقدم تجارب مستخدم مخصصة تضمن قيمة أعلى مدى الحياة.</p></div>
        </div>

    </div>
</header>

    <!--div class="container-md" style="background-color: black; padding-top: 100px; padding-bottom: 100px">

    </div-->



<!--services-->
<div id="services" class="services">
<div class="container h-100">
    <img class="bg-image" src="{{ asset('images/home/vector-services.svg') }}">
    <div class="row align-items-end" style="height: 100px; ">
        <div class="col"><h5 class="sub-title">خدماتنا</h5></div>
    </div>
    <div class="row align-items-end" style=" height: auto">
        <div class="col-md-7"></div>
        <div class="col-md-5"><h1 class="main-title">نوفر افضل مستوي خدمة</h1></div>
    </div>
    <div class="row align-items-center" style="margin-top: 7vw; height: auto;">
        <div class="col-md-4 col-md-0"></div>
        <div class="col-md-2 icons-set">
            <a class="hvr-pop" href=""><img src="{{ asset('images/icons/markting.svg') }}" alt=""></a>
            <p>التسويق</p>
        </div>
        <div class="col-md-2 icons-set" >
            <a class="hvr-pop" href=""><img src="{{ asset('images/icons/infosystem.svg') }}" alt=""></a>
            <p>نظم المعلومات</p>
        </div>
        <div class="col-md-2 icons-set" >
            <a class="hvr-pop" href=""><img src="{{ asset('images/icons/apps.svg') }}" alt=""></a>
            <p>تصميم التطبيقات</p>
        </div>
        <div class="col-md-2 icons-set">
            <a class="hvr-pop" href=""><img src="{{ asset('images/icons/webdesign.svg') }}" alt=""></a>
            <p>تصميم مواقع</p>
        </div>
    </div>
    <div class="row align-items-center" style="height: 100px;">
        <div class="col-md-10"></div>
        <div class="col-md-2"><button type="button" class="btn btn-outline-danger btn-block">ابدأ مشروعك</button></div>
    </div>
</div>
</div>
<!--services-->


<!--about us-->
<div id="about" class="about_us">
    <img src="{{ asset('images/BG1.svg') }}" class="bg-image-left1" alt="">
    <div class="container align-items-center" style="padding-top: 110px; position: relative">

        <div class="row" style="height: auto">

            <div class="col-md-6 align-items-start">
                <h5 class="sub-title">عن الشركة</h5>
                <h1 class="main-title">شركة تطوير برمجية متخصصة</h1>
                <p class="description">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>
                <button type="button" class="btn btn-outline-danger btn-lg">عرض المزيد</button>
            </div>
            <div class="col-md-6 align-items-center">
                <img class="about_image" src="{{ asset('images/home/vedio-bg.svg') }}">
                <img src="{{ asset('images/dummy.jpg') }}" alt="">
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-md" style="position:relative; ">
                <img class="img-1" src="{{ asset('images/bg2.svg') }}">
                <img class="img-2" src="{{ asset('images/bg3.svg') }}">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 stats">
                        <div class="system_mang">
                            <p class="count-mark">+</p><p class="timer count-title count-number" data-to="100" data-speed="1500">50</p>
                            <p>إدارة نظام</p>
                        </div>
                    </div>
                    <div class="col-md-3 stats">
                        <div class="mobile_app">
                            <p class="count-mark">+</p><p class="timer count-title count-number" data-to="50" data-speed="1500"></p>
                            <p>إدارة نظام</p>
                        </div>
                    </div>
                    <div class="col-md-3 stats">
                        <div class="website">
                            <p class="count-mark">+</p><p class="timer count-title count-number" data-to="100" data-speed="1500">+50</p>
                            <p>إدارة نظام</p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>

                    <!--div class="col-md-4 stats">
                        <div class="d-flex justify-content-center">
                            <div class="system_mang">
                                <p class="stat">+50</p>
                                <p>إدارة نظام</p>
                            </div>
                            <div class="mobile_app">
                                <p class="stat">+50</p>
                                <p>إدارة نظام</p>
                            </div>
                            <div class="website">
                                <p class="stat">+50</p>
                                <p>إدارة نظام</p>
                            </div>
                        </div>
                    </div-->


                </div>
            </div>
        </div>
    </div>

</div>

<!--about us-->

<!--portfolio-->
<div id="portfolio" class="portfolio">
    <div class="container" style="padding-top: 90px;">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2 align-items-end"><p class="sub-title">اعمالنا</p></div>
        </div>
        <div class="row">
            <div class="col-md-6 align-items-start"><button type="button" class="btn btn-danger" style="float: left">عرض الكل</button></div>
            <div class="col-md-6 align-items-end"><p class="main-title">نحول الأفكار الى واقع ملموس</p></div>
        </div>
        <div class="row portfolio_content">
            <div class="col-md-9 slider">
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="col-md-6"  style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">تطبيق بيتس</h4>
                                        <p class="card-text card-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">نظام عضويات نادي الجزيرة</h4>
                                        <p class="card-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Second slide-->
                    <div class="carousel-item">

                            <div class="col-md-6" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 description">
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق</p>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/icons/left.svg') }}" style="float: left" href="#multi-item-example" data-slide="prev" alt="">
                    <img src="{{ asset('images/icons/right.svg') }}" style="float: left" href="#multi-item-example" data-slide="next" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--portfolio-->


<!--blog-->
<div id="blog" class="blog">
    <div class="container" style="padding-top: 90px;">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2 align-items-end"><p class="sub-title">اعمالنا</p></div>
        </div>
        <div class="row">
            <div class="col-md-6 align-items-start">
                <img src="{{ asset('images/icons/left.svg') }}" style="float: left" href="#multi-item-blog" data-slide="prev" alt="">
                <img src="{{ asset('images/icons/right.svg') }}" style="float: left" href="#multi-item-blog" data-slide="next" alt="">
            </div>
            <div class="col-md-6 align-items-end"><p class="main-title">نحول الأفكار الى واقع ملموس</p></div>
        </div>
        <div class="row">
            <div class="col-md-12 align-items-center">
                <div id="multi-item-blog" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="col-md-4  col-xs-12"  style="float:left">
                                <div class="align-items-center">
                                    <img src="{{ asset('images/blog-photo.jpeg') }}">
                                    <p class="category">التسويق</p>
                                    <p class="title">استراتيجية التسويق</p>
                                    <p class="date">يونيو, 2020</p>
                                </div>
                            </div>

                            <div class="col-md-4 card-blog"  style="float:left">
                                <div class="align-items-center">
                                    <img src="{{ asset('images/blog-photo.jpeg') }}">
                                    <p class="category">التسويق</p>
                                    <p class="title">استراتيجية التسويق</p>
                                    <p class="date">يونيو, 2020</p>
                                </div>
                            </div>

                            <div class="col-md-4 card-blog"  style="float:left">
                                <div class="align-items-center">
                                    <img src="{{ asset('images/blog-photo.jpeg') }}">
                                    <p class="category">التسويق</p>
                                    <p class="title">استراتيجية التسويق</p>
                                    <p class="date">يونيو, 2020</p>
                                </div>
                            </div>

                        </div>

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-4 card-blog"  style="float:left">
                                <div class="align-items-center">
                                    <img src="{{ asset('images/blog-photo.jpeg') }}">
                                    <p class="category">التسويق</p>
                                    <p class="title">استراتيجية التسويق</p>
                                    <p class="date">يونيو, 2020</p>
                                </div>
                            </div>

                            <div class="col-md-4 card-blog"  style="float:left">
                                <div class="align-items-center">
                                    <img src="{{ asset('images/blog-photo.jpeg') }}">
                                    <p class="category">التسويق</p>
                                    <p class="title">استراتيجية التسويق</p>
                                    <p class="date">يونيو, 2020</p>
                                </div>
                            </div>

                            <div class="col-md-4 card-blog"  style="float:left">
                                <div class="align-items-center">
                                    <img src="{{ asset('images/blog-photo.jpeg') }}">
                                    <p class="category">التسويق</p>
                                    <p class="title">استراتيجية التسويق</p>
                                    <p class="date">يونيو, 2020</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!--blog-->

<div id="feedbacks" class="footer">
<!--feedbacks-->

    <div class="container-fluid feedback" style="height: auto;">
        <p class="sub-title sub-title-a">اراء عملائنا</p>
            <img class="background-img" src="{{ asset('images/vector-feedback.svg') }}" alt="">
            <div class="row align-items-center" style="padding-top: 100px; margin-bottom: 10%">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-end">
                        <div class="feedback">
                            <p class="client_name">محمد حسام</p>
                            <p class="description">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف</p>
                        </div>
                        <div class="photo">
                            <span class="client_photo">
                                <img src="{{ asset('images/man.jpeg') }}">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
    </div>

    <!--footer part-->
    <div class="container-fluid bottom-part" style="height: auto;">
        <img class="right-image" src="{{ asset('images/bg7.svg') }}" alt="">
        <img class="left-image" src="{{ asset('images/bg8.svg') }}" alt="">

            <div class="row align-items-center" style="padding-top: 30px;">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="middle-content" style="text-align: center">
                        <p class="sub-title" style="text-align: center;">تواصل معنا</p>
                        <p class="main-title" style="text-align: center; color: #FFFFFF">شاركنا فكرتك الان</p>

                        @include('layouts.contact_form')

                    </div>
                </div>
                <div class="col-md-3"></div>

            </div>
    </div>
    <!--footer part-->
    <!--footer-->
    <div class="container-fluid" style="position: absolute; background-color: #0A0945">
        <div class="container-md" style="position: relative; background-color: #0A0945;">

            <hr style="background-color: gray"/>
            <div class="social-media">
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook" ></a>
            </div>
            <div class="copyrights">
                <img src="{{asset('images/logo.png')}}" alt="">
                <p>DEVEST Company 2021 ©</p>
            </div>
        </div>
    </div>
    <!--footer-->
<!--feedbacks-->
</div>

@endsection




