@extends('admin.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>NORMAL TABLES</h2>
            </div>

    <!-- section -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="card">
            <div class="header">
                <h2>
                    Header
                </h2>
            </div>
            <div class="body">
                <form method="POST" action="{{route('portfolio.update', $portfolio->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <!--text field-->
                    <label for="">Title</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="" name="title" value="{{ $portfolio->title }}" class="form-control" placeholder="Enter your text">
                        </div>
                    </div>
                    <!--text field-->

                    <!--ck editor-->
                    <label for="">Content</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea placeholder="Enter your embed code" class="ckeditor" name="content">{!! $portfolio->content !!}</textarea>
                        </div>
                    </div>
                    <!--ck editor-->

                    <label for="">Photo</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" id="" name="image" onchange="readURL(this);" class="form-control upload_file" accept="image/png, image/jpeg, image/jpg">
                            <img src="{{ asset('images/portfolio/'.$portfolio->image) }}" name="photo" id="upload_preview" style="width: 250px; height: auto;" alt="Image preview...">
                        </div>
                    </div>

                    <!--ck editor-->
                    <label for="">Platforms</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea placeholder="Enter your embed code" class="ckeditor" name="platforms">{!! $portfolio->platforms !!}</textarea>
                        </div>
                    </div>
                    <!--ck editor-->

                <br>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                </form>
            </div>
        </div>

    </div>
    <!--section end-->

        </div>
    </section>



@endsection
