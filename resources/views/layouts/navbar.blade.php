{!! Html::style('css/navbar.css') !!}

<!--navigation bar-->
<navigation>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-md">
        <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" active>
                    <a class="nav-link" href="{{ route('/') }}">اتصل بنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">مدونتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portfolio') }}">اعمالنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">عن الشركة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">خدماتنا</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</navigation>
