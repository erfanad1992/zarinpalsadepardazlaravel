@extends('admin.layouts.master')

@section('head-tag')
    <title>تنظیمات آدرس وبسایت شما</title>
@endsection


@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12">خانه</li>
            <li class="breadcrumb-item font-size-12">بخش تنظیمات</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">تنظیمات آدرس وبسایت شما</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        تنظیمات آدرس وبسایت شما
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom">

                </section>



                     <div style="font-size: large; text-align: right"> آدرس وبسایت شما :
                    {{$lastWebsite}}
                         </div>
                <br>

                    <a href="{{ route('websiteaddress.send') }}" type="submit" class="btn btn-info" role="button">ویرایش</a>

            </section>
        </section>
    </section>

@endsection
