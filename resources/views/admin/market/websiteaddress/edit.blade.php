@extends('admin.layouts.master')

@section('head-tag')
    <title>آدرس وبسایت شما</title>
@endsection


@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12">خانه</li>
            <li class="breadcrumb-item font-size-12">بخش تنظیمات</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">آدرس وبسایت شما</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        آدرس وبسایت شما
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom">

                </section>


                <div id="formContent">

                    <form id="merchant_id_submit" method="POST" action="{{ route('websiteaddress.send') }}">


                        @csrf

                        <input class="form-control" id="website"  type=text   required name="website" placeholder="آدرس وبسایت" value="" >



                        <br>
                        <br/>


                        <input class="btn btn-success btn-md" type="submit" style="font-family: IRAN Sans, serif"   value="ذخیره">
                       </form>

                </div>
             </section>
        </section>
    </section>

@endsection
