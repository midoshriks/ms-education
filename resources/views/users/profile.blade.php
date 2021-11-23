@extends('layouts.header')

@section('content')
    <div class="wrapper boxed-wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header sty-one">
                <h1 class="text-black">Profile Page</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="sub-bread"><i class="fa fa-angle-right"></i> Pages</li>
                    <li><i class="fa fa-angle-right"></i> Profile Page</li>
                </ol>
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="user-profile-box m-b-3">
                            <div class="box-profile text-white"> <img
                                    class="profile-user-img img-responsive img-circle m-b-2" src="{{ asset('img_user/'.Auth::user()->img) }}"
                                    alt="User profile picture">
                                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                                <p class="text-center">&copy; alexanderpierce</p>
                                <p class="text-center">Praesent libero. Sed cursus ante dapi bus diam. Sed nisi nulla
                                    quis sem at nibh elementum imperdiet. Duis sagi diam ipsum resent.</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="box-body"> <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
                                <p class="text-muted"> B.S. in Computer Science from the University of Tennessee at
                                    Knoxville </p>
                                <hr>
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                                <p class="text-muted">{{ Auth::user()->country }}</p>
                                <hr>
                                <strong><i class="fa fa-envelope margin-r-5"></i> Email address </strong>
                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                <hr>
                                <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>
                                <p>{{ Auth::user()->phone }}</p>
                                <hr>
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                                <div class="embed-container maps">
                                    <iframe class="full-wid"
                                        src="https://maps.google.co.in/maps?sll=34.0204989,-118.4117325&amp;sspn=0.8745562,1.4073488&amp;cid=16298491244936825076&amp;q=Los+Angeles,+CA,+USA&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+Los+Angeles+County,+California,+United+States&amp;t=m&amp;ll=34.052234,-118.243685&amp;spn=0.697085,0.848982&amp;output=embed"
                                        style="pointer-events: none;"></iframe>
                                </div>
                                <hr>
                                <strong><i class="fa fa-phone margin-r-5"></i> Social Profile</strong>
                                <div class="text-left"> <a class="btn btn-social-icon btn-facebook"><i
                                            class="fa fa-facebook"></i></a> <a class="btn btn-social-icon btn-google"><i
                                            class="fa fa-google-plus"></i></a> <a
                                        class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a> <a
                                        class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a> </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="info-box">
                            <div class="card tab-style1">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs profile-tab" role="tablist">
                                    {{-- <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"
                                            role="tab" aria-expanded="true">Activity</a> </li> --}}
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                            href="#profile" role="tab" aria-expanded="false">Profile</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab"
                                            href="#settings" role="tab">Settings</a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    {{-- <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="user-img pull-left"> <img src="dist/img/img3.jpg"
                                                            class="img-circle img-responsive" alt="User Image"> </div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="mail-contnet">
                                                        <h5>Florence Douglas</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                            nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed
                                                            nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                                                            ipsum raesent mauris nec.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                            nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed
                                                            nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                                                            ipsum raesent mauris nec.</p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-xs-4 m-bot-2"><img
                                                                    src="dist/img/img7.jpg" alt="user"
                                                                    class="img-responsive img-rounded"></div>
                                                            <div class="col-lg-3 col-xs-4 m-bot-2"><img
                                                                    src="dist/img/img8.jpg" alt="user"
                                                                    class="img-responsive img-rounded"></div>
                                                            <div class="col-lg-3 col-xs-4 m-bot-2"><img
                                                                    src="dist/img/img9.jpg" alt="user"
                                                                    class="img-responsive img-rounded"></div>
                                                            <div class="col-lg-3 col-xs-4 m-bot-2"><img
                                                                    src="dist/img/img10.jpg" alt="user"
                                                                    class="img-responsive img-rounded"></div>
                                                        </div>
                                                        <div class="like-comm m-t-1"> <a href="#">150 comment</a> <a
                                                                href="#"><i class="fa fa-heart text-danger"></i> 25
                                                                Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-3">
                                                <div class="col-lg-2">
                                                    <div class="user-img pull-left"> <img src="dist/img/img5.jpg"
                                                            class="img-circle img-responsive" alt="User Image"> </div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="mail-contnet">
                                                        <h5>Florence Douglas</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                            nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed
                                                            nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                                                            ipsum raesent mauris nec.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                            nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed
                                                            nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                                                            ipsum raesent mauris nec.</p>
                                                        <div class="like-comm m-t-1"> <a href="#">150 comment</a> <a
                                                                href="#"><i class="fa fa-heart text-danger"></i> 25
                                                                Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-3">
                                                <div class="col-lg-2">
                                                    <div class="user-img pull-left"> <img src="dist/img/img3.jpg"
                                                            class="img-circle img-responsive" alt="User Image"> </div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="mail-contnet">
                                                        <h5>Florence Douglas</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                            nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed
                                                            nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                                                            ipsum raesent mauris nec.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                            nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed
                                                            nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                                                            ipsum raesent mauris nec.</p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-xs-4 m-bot-2"><img
                                                                    src="dist/img/img7.jpg" alt="user"
                                                                    class="img-responsive img-rounded"></div>
                                                            <div class="col-lg-3 col-xs-4 m-bot-2"><img
                                                                    src="dist/img/img8.jpg" alt="user"
                                                                    class="img-responsive img-rounded"></div>
                                                            <div class="col-lg-3 col-xs-4 m-bot-2"><img
                                                                    src="dist/img/img9.jpg" alt="user"
                                                                    class="img-responsive img-rounded"></div>
                                                            <div class="col-lg-3 col-xs-4 m-bot-2"><img
                                                                    src="dist/img/img10.jpg" alt="user"
                                                                    class="img-responsive img-rounded"></div>
                                                        </div>
                                                        <div class="like-comm m-t-1"> <a href="#">150 comment</a> <a
                                                                href="#"><i class="fa fa-heart text-danger"></i> 25
                                                                Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <!--second tab-->
                                    <div class="tab-pane active" id="profile" role="tabpanel" aria-expanded="false">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3 col-xs-6 b-r"> <strong>Full Name</strong> <br>
                                                    <p class="text-muted">{{Auth::user()->name}}</p>
                                                </div>
                                                <div class="col-lg-3 col-xs-6 b-r"> <strong>Squad</strong> <br>
                                                    <p class="text-muted">{{Auth::user()->squad}}</p>
                                                </div>
                                                <div class="col-lg-3 col-xs-6 b-r"> <strong>Mobile</strong> <br>
                                                    <p class="text-muted">{{ Auth::user()->phone }}</p>
                                                </div>
                                                <div class="col-lg-3 col-xs-6 b-r"> <strong>Email</strong> <br>
                                                    <p class="text-muted">{{Auth::user()->email}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <p>Lorem Ipsum is simply dummy text of the printing vulputate eget, arcu. In
                                                enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                                felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                                                elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                                porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                            <p>Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar
                                                porttitor feugiat. Aliquam efficitur feugiat accumsan. Nulla hendrerit
                                                cursus nisi nec mattis. </p>

                                            {{-- <h4 class="font-medium m-t-3">Skill Set</h4>
                                            <hr>
                                            <div>
                                                <h6 class="m-t-3">Wordpress <span
                                                        class="pull-right">80%</span></h6>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                        style="width:80%; height:6px;"> <span class="sr-only">50%
                                                            Complete</span> </div>
                                                </div>
                                                <h5 class="m-t-3">HTML 5 <span class="pull-right">90%</span>
                                                </h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                                        aria-valuemin="0" aria-valuemax="100"
                                                        style="width:90%; height:6px;"> <span class="sr-only">50%
                                                            Complete</span> </div>
                                                </div>
                                                <h5 class="m-t-3">jQuery <span class="pull-right">50%</span>
                                                </h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                        style="width:50%; height:6px;"> <span class="sr-only">50%
                                                            Complete</span> </div>
                                                </div>
                                                <h5 class="m-t-3">Photoshop <span
                                                        class="pull-right">70%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                        style="width:70%; height:6px;"> <span class="sr-only">50%
                                                            Complete</span> </div>
                                                </div>
                                            </div> --}}

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="settings" role="tabpanel">
                                        <div class="card-body">
                                            <form class="form-horizontal form-material" action="/updata_user/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">
                                                    <label class="col-md-12">Full Name</label>
                                                    <div class="col-md-12">
                                                        <input id="name" value="{{Auth::user()->name}}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Email</label>
                                                    <div class="col-md-12">
                                                            <input id="email" value="{{Auth::user()->email}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-12">Phone No</label>
                                                    <div class="col-md-12">
                                                        <input id="phone" value="{{Auth::user()->phone}}" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-12">country</label>
                                                    <div class="col-md-12">
                                                        <input id="country" value="{{Auth::user()->country}}" type="country" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country">

                                                        @error('country')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="squad" class="col-md-4 col-form-label text-md-right">{{ __('Select squad') }}</label>
                                                        <div class="col-md-12">
                                                            <select name="squad" class="form-control form-control-line">
                                                                <option>{{Auth::user()->squad}}</option>
                                                                <option value="1 اولى نظم">أولى نظم </option>
                                                                <option value="2  تانية نظم"> تانية نظم </option>
                                                                <option value="3 تاتة نظم">تالتة نظم</option>
                                                                <option value="4 رابعة نظم">رابعة نظم</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {{-- <label class="col-md-12">your img</label> --}}
                                                    <div class="col-md-12">
                                                        <label for="img" class="col-md-4 col-form-label text-md-right">{{ __(' your img') }}</label>

                                                        <div class="col-md-12">
                                                            <input id="img" type="file" class="form-control" name="img"  autocomplete="new-password">
                                                            <img src="{{ asset('img_user/'.Auth::user()->img) }}" alt="img" style="width: 40px;">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-12">Password</label>
                                                    <div class="col-md-12">
                                                        {{-- <input id="password"  value="{{Auth::user()->password}}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- <div class="form-group">
                                                    <label class="col-sm-12">Select Country</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control form-control-line">
                                                            <option>London</option>
                                                            <option>India</option>
                                                            <option>Usa</option>
                                                            <option>Canada</option>
                                                            <option>Thailand</option>
                                                        </select>
                                                    </div>
                                                </div> --}}

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success">Update Profile</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main row -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
@endsection
