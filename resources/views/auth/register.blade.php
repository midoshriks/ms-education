@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country"
                                    class="col-md-4 col-form-label text-md-right">{{ __('country') }}</label>

                                <div class="col-md-6">
                                    <input id="country" type="country"
                                        class="form-control @error('country') is-invalid @enderror" name="country"
                                        value="{{ old('country') }}" required autocomplete="country">

                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_type"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Select your type') }}</label>
                                <div class="col-md-6">
                                    {{-- <select name="user_type"
                                        class="form-control form-control-line">
                                        <option value="STUDENT">Student</option>
                                        <option value="ADMIN">Admin</option>
                                    </select> --}}

                                    <select  name="user_type"  id="seeAnotherField" class="form-control form-control-line">
                                        <option value="STUDENT">Student</option>
                                        <option value="ADMIN">Admin</option>
                                    </select>

                                    @error('verification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- verification code admin --}}
                            <div class="form-group row" id="verification_code" style="display: none;">
                                <label for="user_type"
                                    class="col-md-4 col-form-label text-md-right">{{ __('verification code Admin') }}</label>
                                <div class="col-md-6">
                                    <input type="text" name="verification" class="form-control form-control-line">
                                </div>
                            </div>
                            {{-- verification code admin --}}

                            <div class="form-group row" id="colume_squad" style="display: none;">
                                <label for="squad"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Select squad') }}</label>
                                <div class="col-md-6">
                                    <select name="squad" class="form-control form-control-line">
                                        {{-- <option>{{Auth::user()->squad}}</option> --}}
                                        <option value="1 اولى نظم">أولى نظم </option>
                                        <option value="2  تانية نظم"> تانية نظم </option>
                                        <option value="3 تاتة نظم">تالتة نظم</option>
                                        <option value="4 رابعة نظم">رابعة نظم</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('img') }}</label>

                                <div class="col-md-6">
                                    <input id="img" type="file" class="form-control @error('img') is-invalid @enderror"
                                        name="img">

                                    @error('img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $("#seeAnotherField").change(function() {
  if ($(this).val() == "ADMIN") {
    $('#verification_code').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  }
   else {
    $('#verification_code').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }

  if ($(this).val() == "STUDENT") {
    $('#colume_squad').show();
    $('#otherField').attr('required', '');
    $('#otherField').attr('data-error', 'This field is required.');
  }
   else {
    $('#colume_squad').hide();
    $('#otherField').removeAttr('required');
    $('#otherField').removeAttr('data-error');
  }
});

$("#seeAnotherField").trigger("change");

// $("#seeAnotherFieldGroup").change(function() {
//   if ($(this).val() == "ADMIN") {
//     $('#otherFieldGroupDiv').show();
//     $('#otherField1').attr('required', '');
//     $('#otherField1').attr('data-error', 'This field is required.');
//     $('#otherField2').attr('required', '');
//     $('#otherField2').attr('data-error', 'This field is required.');
//   } else {
//     $('#otherFieldGroupDiv').hide();
//     $('#otherField1').removeAttr('required');
//     $('#otherField1').removeAttr('data-error');
//     $('#otherField2').removeAttr('required');
//     $('#otherField2').removeAttr('data-error');
//   }
// });
// $("#seeAnotherFieldGroup").trigger("change");
</script>
@endpush


