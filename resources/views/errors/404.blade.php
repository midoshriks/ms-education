@extends('layouts.head')

@section('content')
{{-- <body class="hold-transition lockscreen">


    <!-- jQuery 3 -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="{{ asset('template/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- template -->
    <script src="{{ asset('template/js/niche.js') }}"></script>
</body> --}}
<body class="hold-transition lockscreen">

    <!-- Automatic element centering -->
    <div>
        <div class="error-page text-center">
            <h2 class="headline text-yellow"> 404</h2>
            <div>
                <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
                <p> We could not find the page you were looking for.
                    Meanwhile, you may <a href="/home">return to dashboard</a> or try using the search form. </p>
                <form class="search-form">
                    <div class="input-group">
                        <input name="search" class="form-control" placeholder="Search" type="text">
                        <div class="input-group-btn">
                            <button type="submit" name="submit" class="btn btn-warning btn-flat"><i
                                    class="fa fa-search"></i> </button>
                        </div>
                    </div>
                    <!-- /.input-group -->
                </form>
            </div>
            <!-- /.error-content -->
        </div>
        <div class="lockscreen-footer text-center m-t-3"> Copyright © 2017 Yourdomian. All rights reserved. </div>
    </div>
    <!-- /.center -->
    <!-- /.login-box -->
</body>
@endsection

