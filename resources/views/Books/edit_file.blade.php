@extends('layouts.header')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1 class="text-black">lecture Students</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="sub-bread"><i class="fa fa-angle-right"></i> Tables</li>
                <li><i class="fa fa-angle-right"></i> lecture Students</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="info-box">
                <h4 class="text-black">lecture Students</h4>
                <p>Export data to Copy, CSV, Excel, PDF & Print</p>

                {{-- ================================================= --}}

                @if (!Auth::guest())

                    @if (Auth::user()->user_type == 'ADMIN')

                        <div class="row m-t-3">
                            <div class="col-lg-12">
                                <div class="card ">
                                    <div class="card-header bg-blue">
                                        <h5 class="text-white m-b-0">Upload file</h5>
                                    </div>
                                    <div class="card-body">

                                        <form action="/update_file/{{$edit_files->id}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">File Name</label>
                                                        <input class="form-control @error('file_name') is-invalid @enderror"
                                                            placeholder="File Name" type="text" name="file_name" value="{{$edit_files->file_name}}">
                                                        <span class="fa fa-file form-control-feedback"
                                                            aria-hidden="true"></span>
                                                        @error('file_name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">Uploade File</label> <br>
                                                        <label class="custom-file center-block block">
                                                            <input id="file" name="file"
                                                                class="custom-file-input @error('file') is-invalid @enderror"
                                                                type="file">
                                                        <label class="control-label">{{$edit_files->file}}</label>

                                                            <span class="custom-file-control"></span> </label>
                                                        @error('file')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">subject</label>
                                                        <textarea
                                                            class="form-control @error('subject') is-invalid @enderror"
                                                            name="subject" id="placeTextarea" rows="3"
                                                            placeholder="subject">{{$edit_files->subject}}</textarea>
                                                        @error('subject')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
                                                    <button type="submit" class="btn btn-success">Update files</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif
                @endif


                {{-- ================================================= --}}
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
