@extends('layouts.header')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1 class="text-black">Books Students</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="sub-bread"><i class="fa fa-angle-right"></i> Tables</li>
                <li><i class="fa fa-angle-right"></i> Books Students</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="info-box">
                <h4 class="text-black">Books Students Export </h4>
                <p>Export Books Students Export Copy, CSV, Excel, PDF & Print</p>

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

                                        <form action="/uploade_books" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">File Name</label>
                                                        <input class="form-control @error('book_name') is-invalid @enderror"
                                                            placeholder="File Name" type="text" name="book_name">
                                                        <span class="fa fa-file form-control-feedback"
                                                            aria-hidden="true"></span>
                                                        @error('book_name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">select term</label>
                                                        <select class="form-control @error('term') is-invalid @enderror" type="text" name="term">
                                                            <option value="term one">ترم أول </option>
                                                            <option value="term tow">ترم تانى </option>
                                                        </select>
                                                        <span class="fa fa-suitcase form-control-feedback"
                                                            aria-hidden="true"></span>
                                                        @error('term')
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
                                                            <span class="custom-file-control"></span> </label>
                                                        @error('file')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group has-feedback">
                                                        <label class="control-label">subject</label>
                                                        <textarea class="form-control @error('book_subject') is-invalid @enderror"
                                                            name="book_subject" id="placeTextarea" rows="3"
                                                            placeholder="subject"></textarea>
                                                        @error('book_subject')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    {{-- <button type="submit" class="btn btn-success">Submit</button> --}}
                                                    <button type="submit" class="btn btn-success">Upload Book</button>

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
                                <th>Status</th>
                                <th>cearte by</th>
                                @if (!Auth::guest())
                                    @if (Auth::user()->user_type == 'ADMIN')
                                        <th>Action</th>
                                    @endif
                                @endif
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books_student_2 as $k => $book)

                                <tr>
                                    <td>{{ $k + 1 }}</td>
                                    <td>{{ $book->book_name }}</td>
                                    <td>
                                        <a href="{{ asset('3ooks_studunt_2/' . $book->books) }}">view</a>
                                        {{-- <a href="{{ asset('/pooks/A4-31 دراسة محاسبية باللغة الإنجليزية.pdf') }}">view</a> --}}
                                    </td>
                                    <td>{{ $book->book_subject }}</td>
                                    <td><span class="label label-success">{{$book->term}}</span></td>
                                    @if (!Auth::guest())
                                        @if (Auth::user()->user_type == 'ADMIN')
                                            <td>
                                                <a href="/edit_books/{{ $book->id }}">
                                                    <i class="fa fa-edit fa-2x  (alias)"></i>
                                                </a>
                                                <a href="/delete_Books/{{ $book->id }}">
                                                    <i class="fa ti-trash fa-2x "></i>
                                                </a>
                                                {{-- <a href="#" class="delete" book_id="{{ $book->id }}" book_name="{{ $book->name }}">
                                                    <i class="fa ti-trash fa-2x "></i>
                                                </a> --}}
                                            </td>
                                        @endif
                                    @endif
                                    <td>{{ $book->cearte_by }}</td>
                                    <td>{{ $book->created_at->format('d-m-Y') }}</td>
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
                                <th>cearte by</th>
                                @if (!Auth::guest())
                                    @if (Auth::user()->user_type == 'ADMIN')
                                        <th>Action</th>
                                    @endif
                                @endif
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

@push('scripts')
<script>
    // test
    // swal("Hello world!");
    // swal("Hello world!");
</script>
@endpush

