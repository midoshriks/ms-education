@extends('layouts.head')

@section('content')

    {{-- <div class="content-wrapper"> --}}
    <div class="container">
        {{-- ================================================ --}}
        <!-- Main content -->
        <div class="row m-t-3 mb-5">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">شروط الاحكام </h5>
                    </div>
                    <div class="card-body">

                        <form action="/accept_condition/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Terms and Conditions {{ Auth::user()->name }} </label>
                                        <textarea class="form-control @error('body') is-invalid @enderror" name="body"
                                            id="placeTextarea" rows="19" placeholder="subject posts">
                                                    الشروط والأحكام لمتجر أنتكة الإلكتروني

    يوفر متجر أنتكة هذه الشروط والأحكام لتبليغكم بالسياسة والممارسات القانونية للموقع, يرجى أن تراجع هذه الشروط والأحكام بعناية قبل إستخدام هذا الموقع الإلكتروني فإن إستخدامك لهذا الموقع الإلكتروني يعنى موافقة لا رجعة فيها منك بأن تلتزم بهذه الشروط والأحكام.

    القواعد الحاكمة
    عدم مخالفة القوانين السارية أو تحريض الآخرين على انتهاكها مع مراعاة عدم السب والقذف والمضايقة وإنتهاك حقوق الآخرين من خلال التعليقات ووسائل الإتصال المتاحة.

    حماية البيانات
    أي معلومات شخصية تزودنا بها عند إستخدامك لهذا الموقع سوف تعامل وفقاً لسياسة الخصوصية الموجودة لدينا.

    حقوق الملكية
    - لا يجوز لك نسخ أو تعديل أو نشر أو إذاعة أو توزيع أو بيع أو نقل أي مواد على هذا الموقع سواء كان ذلك بصورة إجمالية او جزئية بدون إذن كتابي صريح ومسبق, ومع ذلك يجوز تحميل محتويات هذا الموقع أو طبعها أو نسخها بغرض الاستخدام الشخصي فقط غير التجاري لديك.
    - لا يجوز أي استخدام غير مصرح به لهذا الموقع قد يؤدى إلى إنتهاك لقوانين حقوق التأليف والنشر وقوانين العلامات التجارية وقوانين الخصوصية والدعاية والقواعد والقوانين الأساسية للإتصالات.
                                                </textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">select term</label>
                                        <select class="form-control @error('term') is-invalid @enderror" type="text"
                                            name="rights">
                                            <option value="accept">accept</option>
                                            <option value="non_accept">non accept</option>
                                        </select>
                                        <span class="fa  fa-check form-control-feedback" aria-hidden="true"></span>
                                        @error('term')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">اوافق</button>
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
