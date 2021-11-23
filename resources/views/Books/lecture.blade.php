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

                    @if(!Auth::guest())

                        @if(Auth::user()->user_type == 'ADMIN')

                        <div class="row m-t-3">
                            <div class="col-lg-12">
                                <div class="card ">
                                    <div class="card-header bg-blue">
                                        <h5 class="text-white m-b-0">Upload file</h5>
                                    </div>
                                    <div class="card-body">

                                        <form action="/uploade_file" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">File Name</label>
                                                        <input class="form-control @error('file_name') is-invalid @enderror" placeholder="File Name" type="text" name="file_name">
                                                        <span class="fa fa-file form-control-feedback" aria-hidden="true"></span>
                                                        @error('file_name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">Url file</label>
                                                        <input class="form-control @error('url_file') is-invalid @enderror" placeholder="Url File" type="text" name="url_file">
                                                        <span class="fa fa-link form-control-feedback" aria-hidden="true"></span>
                                                        @error('url_file')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">Uploade File</label> <br>
                                                        <label class="custom-file center-block block">
                                                            <input id="file" name="file" class="custom-file-input @error('file') is-invalid @enderror" type="file">
                                                            <span class="custom-file-control"></span> </label>
                                                            @error('file')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">subject</label>
                                                        <textarea class="form-control @error('subject') is-invalid @enderror" name="subject" id="placeTextarea" rows="3"
                                                            placeholder="subject"></textarea>
                                                            @error('subject')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
                                                    <button type="submit" class="btn btn-success">Upload lecture</button>
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
                <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>file name</th>
                                <th>file </th>
                                <th>Subject</th>
                                <th>link</th>
                                @if(!Auth::guest())
                                    @if(Auth::user()->user_type == 'ADMIN')
                                        <th>Action</th>
                                    @endif
                                @endif
                                <th>cearte by</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $k => $file )

                            <tr>
                                <td>{{ $k+1 }}</td>
                                <td>{{$file->file_name}}</td>
                                <td>
                                    <a href="{{ asset('lectures/'.$file->file ) }}">view</a>
                                    {{-- <a href="{{ asset('/pooks/A4-31 دراسة محاسبية باللغة الإنجليزية.pdf') }}">view</a> --}}
                                </td>
                                <td>{{$file->subject}}</td>
                                <td>
                                    <a href="{{$file->url_file}}"><span class="label label-success">Activity</span></a>
                                </td>
                                @if(!Auth::guest())
                                    @if(Auth::user()->user_type == 'ADMIN')
                                    <td>
                                        <a href="/edit_files/{{ $file->id }}">
                                            <i class="fa fa-edit fa-2x  (alias)"></i>
                                        </a>
                                        <a href="/delete_lecture/{{$file->id}}">
                                            <i class="fa ti-trash fa-2x "></i>
                                        </a>

                                        {{-- <a href="/edit_lecture/{{$file->id}}" class="btn btn-info">Edit</a> --}}
                                        {{-- <a href="/delete_lecture/{{$file->id}}" class="btn btn-danger">Delete</a> --}}
                                    </td>
                                    @endif
                                @endif
                                <td>{{$file->cearte_by}}</td>
                                <td>{{ $file->created_at->format('d-m-Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID #</th>
                                <th>file name</th>
                                <th>file </th>
                                <th>Subject</th>
                                <th>Status</th>
                                @if(!Auth::guest())
                                    @if(Auth::user()->user_type == 'ADMIN')
                                        <th>Action</th>
                                    @endif
                                @endif
                                <th>cearte by</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
