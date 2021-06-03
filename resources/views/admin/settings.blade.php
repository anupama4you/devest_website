@extends('admin.app')

@section('content')

    <section class="content">

        <div class="container-fluid">
            <div class="block-header">
                <h2>Settings</h2>
            </div>

        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Settings
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form>
                            @foreach($settings as $field)
                                @switch($field->type)
                                    @case('string')
                                        <!--text field-->
                                        <label for="email_address">String</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address" class="form-control" placeholder="Enter your email address">
                                            </div>
                                        </div>
                                        <!--text field-->
                                    @break

                                    @case('text')
                                    <!--ck editor-->
                                        <label for="email_address">Text</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                        <textarea id="ckeditor">

                                        </textarea>
                                                </div>
                                            </div>
                                        <!--ck editor-->
                                    @break

                                    @case('number')
                                        <!--text field-->
                                        <label for="email_address">Number</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="email_address" class="form-control" placeholder="Enter your email address">
                                            </div>
                                        </div>
                                        <!--text field-->
                                    @break

                                    @default

                            @endswitch

                            @endforeach

                            <br>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->
        </div>

@endsection
