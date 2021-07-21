@extends('admin.layouts.master')

@section('head-tag')
    <title>بخش تنظیمات مرچنت کد</title>
@endsection


@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12">خانه</li>
            <li class="breadcrumb-item font-size-12">بخش تنظیمات</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">تنظیمات مرچنت کد</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        تنظیمات مرچنت کد
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom">
                    {{--<a href="#" class="btn btn-info btn-sm">ایجاد دسته بندی</a>--}}
                    {{--<div class="width-16-rem">--}}
                        {{--<input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">--}}
                    {{--</div>--}}
                </section>

                <div id="formContent">

                    <form id="merchant_id_submit" method="POST" action="{{ route('merchant.send') }}">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @csrf
<!--                            minlength="36" maxlength="36"-->
{{--<!--                            {!!strip_tags('merchant' ) !!}-->--}}
                        <input class="form-control" id="merchant"  type=text   minlength="36" maxlength="36" required name="merchant" placeholder="مرچنت کد درگاه" value="" >

                        {{--  @if ($errors->has('merchant'))
                              <span ><strong>{{ $errors->first('merchant') }}</strong></span>
                          @endif--}}

                        <br>
                        <br/>


                        <input class="btn btn-success btn-md" type="submit" style="font-family: IRAN Sans, serif"   value="ذخیره">
                        {{--     <a href="{{ route('http://127.0.0.1:8000/admin') }}" type="submit" class="btn btn-info" role="button">ذخیره</a>
                       --}}  </form>

                </div>
             </section>
        </section>
    </section>

@endsection
