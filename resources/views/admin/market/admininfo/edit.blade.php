@extends('admin.layouts.master')

@section('head-tag')
    <title>بخش تنظیمات ادمین</title>
@endsection


@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12">خانه</li>
            <li class="breadcrumb-item font-size-12">بخش تنظیمات</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">تنظیمات ادمین</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        تنظیمات ادمین
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom">

                </section>


                <form id="admin_info_submit" method="POST" action="{{ route('admininfo.send') }}">
                    {{ csrf_field() }}
                    <input class="form-control" type=text name=adminName placeholder="نام ادمین" value="" required autofocus>
                    <br>
                    <input class="form-control" type=email name=adminEmail placeholder="ایمیل ادمین" value="" required autofocus>
                    <br>
                    <input class="form-control" type=password name=adminPassword placeholder="پسورد ادمین" value="" required autofocus>

                    <br>
                    <input class="btn btn-success btn-md" type="submit" style="font-family: IRAN Sans, serif"   value="ذخیره">
                 </form>
            </section>
        </section>
    </section>

@endsection
