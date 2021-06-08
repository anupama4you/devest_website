@extends('admin.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DEVEST ADMIN DASHBOARD</h2>
            </div>

            <!-- section -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <h2>
                            Create
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!--text field-->
                            <label for="">Title</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="" name="title" value="" class="form-control" placeholder="Enter your text">
                                </div>
                            </div>
                            <!--text field-->

                            <!--ck editor-->
                            <label for="">Content</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea placeholder="Enter your embed code" class="ckeditor" name="content"></textarea>
                                </div>
                            </div>
                            <!--ck editor-->

                            <label for="">Photo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="" name="image" onchange="readURL(this);" class="form-control upload_file" accept="image/png, image/jpeg, image/jpg">
                                    <img src="" name="photo" id="upload_preview" style="width: 250px; height: auto;" alt="Image preview...">
                                </div>
                            </div>

                            <!--ck editor-->
                            <label for="">Platforms</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea placeholder="Enter your embed code" class="ckeditor" name="platforms"></textarea>
                                </div>
                            </div>
                            <!--ck editor-->

                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">ADD</button>
                        </form>
                    </div>
                </div>

            </div>
            <!--section end-->

        </div>
    </section>



@endsection
