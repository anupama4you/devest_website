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
                            Create - clients
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('client.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!--text field-->
                            <label for="">Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="" name="name" value="" class="form-control" placeholder="Enter your text">
                                </div>
                            </div>
                            <!--text field-->

                            <label for="">Content</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea placeholder="Enter your feedback" class="form-control" name="content"></textarea>
                                </div>
                            </div>

                            <label for="">Photo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="" name="image" onchange="readURL(this);" class="form-control upload_file" accept="image/png, image/jpeg, image/jpg">
                                    <img src="" id="upload_preview" style="width: 250px; height: auto;" alt="Image preview...">
                                </div>
                            </div>

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
