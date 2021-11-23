@extends('layouts.header')

@push('css')
    <style type="text/css">
        .posts-content {
            margin-top: 20px;
        }

        .ui-w-40 {
            width: 40px !important;
            height: 40px;
        }

        .default-style .ui-bordered {
            border: 1px solid rgba(24, 28, 33, 0.06);
        }

        .ui-bg-cover {
            background-color: transparent;
            background-position: center center;
            background-size: cover;
        }

        .ui-rect {
            padding-top: 50% !important;
        }

        .ui-rect,
        .ui-rect-30,
        .ui-rect-60,
        .ui-rect-67,
        .ui-rect-75 {
            position: relative !important;
            display: block !important;
            padding-top: 100% !important;
            width: 100% !important;
            /* height: 10px; */
        }

        .d-flex,
        .d-inline-flex,
        .media,
        .media>:not(.media-body),
        .jumbotron,
        .card {
            -ms-flex-negative: 1;
            flex-shrink: 1;
        }

        .bg-dark {
            background-color: rgba(24, 28, 33, 0.9) !important;
        }

        .card-footer,
        .card hr {
            border-color: rgba(24, 28, 33, 0.06);
        }
        .card-footer{
            width: 100%
            al
        }
        .ui-rect-content {
            position: absolute !important;
            top: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            left: 0 !important;
        }

        .default-style .ui-bordered {
            border: 1px solid rgba(24, 28, 33, 0.06);
        }
        .body_post{
            display: flex;
            line-break: anywhere;
        }

    </style>

@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Dashboard </h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><i class="fa fa-angle-right"></i> Dashboard </li>
            </ol>
        </div>

        @if(!Auth::guest())

        @if (Auth::user()->user_type == 'ADMIN')
            <form id="test" action="" method="post" style="display: none;">
                <textarea name="" id="" cols="30" rows="10">
                    ddddddddddddd
                </textarea>
            </form>
        @endif
        @endif

        <!-- Main content -->
        <div class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="info-box">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div> <i class="ti-face-smile f-20 text-blue"></i>
                                    <div class="info-box-content">
                                        <h1 class="f-25 text-black">{{ $count_students }}</h1>
                                        <span class="progress-description">New Students</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100" style="width:40%; height:6px;">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div> <i class="ti-bar-chart f-20 text-danger"></i>
                                    <div class="info-box-content">
                                        <h1 class="f-25 text-black">2,030</h1>
                                        <span class="progress-description">New Orders</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div> <i class="ti-book f-20 text-info"></i>
                                    <div class="info-box-content">
                                        <h1 class="f-25 text-black">50</h1>
                                        <span class="progress-description">Online courses</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100" style="width:65%; height:6px;">
                                            <span class="sr-only">65% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div> <i class="ti-wallet f-20 text-green"></i>
                                    <div class="info-box-content">
                                        <h1 class="f-25 text-black">0,0 .ج</h1>
                                        <span class="progress-description">مجموع رصيدك</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100" style="width:1%; height:6px;">
                                            <span class="sr-only">85% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            {{-- ================================================ --}}
            <!-- Main content -->
            <div class="row m-t-3 mb-5">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header bg-blue">
                            <h5 class="text-white m-b-0">أنشر منشورك </h5>
                        </div>
                        <div class="card-body">

                            <form action="/create_posts" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">subject posts</label>
                                            <textarea class="form-control @error('body') is-invalid @enderror" name="body"
                                                id="placeTextarea" rows="5" placeholder="subject posts"></textarea>
                                            @error('body')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">أرفاق صورة أو ملف </label>
                                            <br>
                                            <label class="custom-file center-block block">
                                                <input id="file_body" name="file_body"
                                                    class="custom-file-input @error('file_body') is-invalid @enderror"
                                                    type="file">
                                                <span class="custom-file-control"></span>
                                            </label>
                                            @error('file_body')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">نشر</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
            {{-- ================================================ --}}



            <!-- Main row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="info-box">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h5>Yearly Earning</h5>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li class="text-aqua"> <i class="fa fa-circle"></i> Sales</li>
                                        <li class="text-blue"> <i class="fa fa-circle"></i> Earning ($)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="earning"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-box">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h5>Donut Chart</h5>
                                </div>
                            </div>
                        </div>
                        <div id="donut"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-8">
                    <div class="info-box">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h5>Area Chart</h5>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li class="text-purple"> <i class="fa fa-circle"></i> India</li>
                                        <li class="text-muted"> <i class="fa fa-circle"></i> USA</li>
                                        <li class="text-info"> <i class="fa fa-circle"></i> UK</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="area"></div>
                    </div>

                    {{-- ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp --}}
                    <div class="info-box text-center">
                        @foreach ($show_posts as $show_post )
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="media mb-3">
                                        <img src="{{asset('img_user/'.$show_post->user->img)}}"
                                            class="d-block ui-w-40 rounded-circle" alt="">
                                        <div class="media-body ml-3 mr-3">
                                            <b>
                                            {{$show_post->user->name}}
                                            </b>
                                            <div class="text-muted small">{{$show_post->created_at->format('d-m-Y')}} days ago</div>
                                        </div>
                                        @if (!Auth::guest())
                                        @if (Auth::user()->id == $show_post->user->id)
                                        <div>
                                            <a href="/edit_posts/{{$show_post->id}}"><big>• • •</big></a> <br>
                                            Edit
                                        </div>
                                        @endif
                                        @endif

                                    </div>
                                    <div class="body_post">
                                        <p>
                                            {{$show_post->body}}
                                        </p>
                                    </div>

                                        <a href="javascript:void(0)" class="ui-rect ui-bg-cover"
                                        style="background-image: url('{{asset('posts/'.$show_post->file_body)}}');">
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="d-inline-block text-muted">
                                        <strong>123</strong> Likes <i class=".icon-like"></i></small>
                                    </a>
                                    <a href="javascript:void(0)" class="d-inline-block text-muted mr-5">
                                        <strong>12</strong>  Comments <i class="fa fa- ti-comments"></i></small>
                                    </a>
                                    @if (!Auth::guest())
                                        @if (Auth::user()->id == $show_post->user->id)
                                            <a href="/delete_posts/{{$show_post->id}}" class="d-inline-block text-muted mr-1">
                                                <small class="align-middle mr-5">delete</small>
                                                <i class="fa fa- ti-trash"></i>
                                            </a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="info-box">
                            {{$show_posts->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                    {{-- ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp --}}

                </div>
                <div class="col-lg-4 m-b-3">
                    {{-- -------------- informtion me ----------------------- --}}
                    <a href="https://twitter.com/midoshriks?lang=ar" style="color: #FFF;">
                        <div>
                            <div class="soci-wid-box bg-twitter m-b-3">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item">
                                            <div class="col-lg-12 text-center">
                                                <div class="sco-icon"><i class="ti-twitter-alt"></i></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                                    odio praesent libero sed cursus ante.</p>
                                                <p class="text-italic pt-1">- Mido Shriks -</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item active carousel-item-left">
                                            <div class="col-lg-12 text-center">
                                                <div class="sco-icon"><i class="ti-twitter-alt"></i></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                                    odio praesent libero sed cursus ante.</p>
                                                <p class="text-italic pt-1">- Mido Shriks -</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item carousel-item-next carousel-item-left">
                                            <div class="col-lg-12 text-center">
                                                <div class="sco-icon"><i class="ti-twitter-alt"></i></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                                    odio praesent libero sed cursus ante.</p>
                                                <p class="text-italic pt-1">- Mido Shriks -</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.facebook.com/mido.shrks" style="color: #FFF;">
                        <div>
                            <div class="soci-wid-box bg-facebook m-b-3">
                                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item">
                                            <div class="col-lg-12 text-center">
                                                <div class="sco-icon"><i class="ti-facebook"></i></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                                    odio praesent libero sed cursus ante.</p>
                                                <p class="text-italic pt-1">- Mido Shriks -</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col-lg-12 text-center">
                                                <div class="sco-icon"><i class="ti-facebook"></i></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                                    odio praesent libero sed cursus ante.</p>
                                                <p class="text-italic pt-1">- Mido Shriks -</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item active">
                                            <div class="col-lg-12 text-center">
                                                <div class="sco-icon"><i class="ti-facebook"></i></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                                    odio praesent libero sed cursus ante.</p>
                                                <p class="text-italic pt-1">- Mido Shriks -</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button"
                                        data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a> <a class="carousel-control-next" href="#carouselExampleControls1" role="button"
                                        data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                    </a>
                    {{-- -------------- informtion me ----------------------- --}}

                    <div>
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-yellow">
                                <h3>My Contacts</h3>
                                <h5>Checkout my contacts Admins here</h5>
                            </div>
                            <ul class="products-list product-list-in-box">
                                @foreach ($users2 as $user)
                                    <li class="item">
                                        <div class="product-img"> <img src="{{ asset('img_user/' . $user->img) }}"
                                                alt="Product Image">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-title">{{ $user->name }}</a> <span
                                                class="product-description"> <a href="#">{{ $user->email }}</a> </span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /.widget-user -->

                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user-2 mt-5">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-yellow">
                                <h3>My Contacts</h3>
                                <h5>Checkout my contacts students here</h5>
                            </div>
                            <ul class="products-list product-list-in-box">
                                @foreach ($count_students2 as $count_student)
                                    <li class="item">
                                        <div class="product-img"> <img src="{{ asset('img_user/'.$count_student->img) }}"
                                                alt="Product Image">
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-title">{{ $count_student->name }}</a> <span
                                                class="product-description"> <a href="#">{{ $count_student->email }}</a> </span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')
<script>
    // test
        // swal("Hello world!");
        // alert("Hello world!");
</script>
@endpush
