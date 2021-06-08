@extends('admin.app')

@section('content')

    <section class="content">

        <div class="container-fluid">
            <div class="block-header">
                <h2>Pages</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <!-- section -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                        <div class="header">
                            <h2>
                                Pages content update
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @foreach($pages as $field)

                                @switch($field->type)
                                    @case('text')
                                    <!--text field-->
                                        <label for="pages[{{$field->id}}]">{{ $field->key }}</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="pages[{{$field->id}}]" name="pages[{{$field->id}}]" value="{{ $field->value }}" class="form-control" placeholder="Enter your text">
                                            </div>
                                        </div>
                                        <!--text field-->
                                    @break

                                    @case('number')
                                    <!--text field-->
                                        <label for="pages[{{$field->id}}]">{{ $field->key }}</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="pages[{{$field->id}}]" name="pages[{{$field->id}}]" value="{{ $field->value }}" class="form-control" placeholder="Enter your number">
                                            </div>
                                        </div>
                                        <!--text field-->
                                    @break

                                    @case('long_text')
                                    <!--ck editor-->
                                        <label for="pages[{{$field->id}}]">{{ $field->key }}</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea placeholder="Enter your embed code" class="ckeditor" name="pages[{{$field->id}}]">{!! $field->value !!}</textarea>
                                            </div>
                                        </div>
                                        <!--ck editor-->
                                    @break

                                    @case('image_url')
                                    <!--text field-->
                                        <label for="pages[{{$field->id}}]">{{ $field->key }}</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="pages[{{$field->id}}]" name="pages[{{$field->id}}]" onchange="readURL(this);" class="form-control upload_file" accept="image/png, image/jpeg, image/jpg">
                                                <img src="{{ asset('images/icons/'.$field->value) }}" id="upload_preview"  style="width: 250px; height: auto;" alt="Image preview...">
                                            </div>
                                        </div>
                                        <!--text field-->
                                        @break

                                        @default

                                    @endswitch





                                @endforeach
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                </form>
                                <br>

                    </div>
                </div>
            </div>
        </div>

@endsection
