@extends('layouts.header')

@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header sty-one">
                <h1>edit</h1>
                <ol class="breadcrumb">
                    <li><a href="#">post</a></li>
                    <li><i class="fa fa-angle-right"></i>edit post</li>
                </ol>
            </div>
        {{-- ================================================ --}}
            <!-- Main content -->
            <div class="row m-t-3 mb-5">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header bg-blue">
                            <h5 class="text-white m-b-0">تعديل منشورك الخاص بك </h5>
                        </div>
                        <div class="card-body">

                            <form action="/update_posts/{{$edit_post->id}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">subject posts</label>
                                            <textarea class="form-control @error('body') is-invalid @enderror" name="body"
                                                id="placeTextarea" rows="5" placeholder="subject posts">{{$edit_post->body}}</textarea>
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
                                                <img src="{{ asset('posts/'.$edit_post->file_body) }}" alt="img" style="width: 100px;">
                                            @error('file_body')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">تعديل</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        {{-- ================================================ --}}
</div>

@endsection
