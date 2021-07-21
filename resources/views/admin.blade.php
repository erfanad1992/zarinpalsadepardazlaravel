@extends('admin.layouts.master')

@section('head-tag')
    <title>داشبورد اصلی ادمین</title>
@endsection

@section('content')

    <section class="row" style="; align-items: center">
        <section class="col-lg-12 col-md-12 col-12" style="; align-items: center">
            <a href="#" class="text-decoration-none d-block mb-4" style="height: 200px;align-items: center">
                <section class="card bg-custom-green text-white" style="height: 200px;align-items: center" >
                    <section class="card-body" style=";align-items: center" >
                        <section class="d-flex justify-content-between " >
                            <section class="info-box-body" >
                                <h5 >{{$successtransactionsum}} ریال </h5>
                                <p>مجموع تراکنشهای موفق</p>
                            </section>
                       {{--     <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>--}}
                        </section>
                    </section>

                </section>
            </a>

            <a href="#" class="text-decoration-none d-block mb-4" style="height: 200px;align-items: center">
                <section class="card bg-custom-yellow text-white" style="height: 200px;align-items: center" >
                    <section class="card-body" style=";align-items: center" >
                        <section class="d-flex justify-content-between " >
                            <section class="info-box-body" >
                                <h5 >{{$failedransactionsum}} ریال </h5>
                                <p>مجموع تراکنشهای ناموفق</p>
                            </section>
                            {{--     <section class="info-box-icon">
                                     <i class="fas fa-chart-line"></i>
                                 </section>--}}
                        </section>
                    </section>

                </section>
            </a>
        </section>




    </section>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                       پنل ادمین
                    </h5>
                    <p>
                        در این بخش نحوه کار کردن پنل ادمین توضیح داده شده است
                    </p>
                </section>
                <section class="body-content">
                    <p>
     ابتدا باید در قسمت تنظیمات مرچنت کد مرچنت کد درگاهتان را وارد کرده و ذخیره را بزنید تا بدرستی خریدارتان به درگاه متصل شود
                    <p>
                        پس از وارد شدن به آدرس ادمین وارد قسمت تنظیمات شده و وارد قسمت آدرس وبسایت شما شوید
                        و حتما آدرس وبسایتتان را بدرستی ثبت کنید

                        مثلا :

                        http://laravel.erfandn.ir
                        <br>
                        <br>
                        برای تغییر ایمیل و پسورد ادمین میتوانید از قسمت تنظیمات ادمین اطلاعات را وارد کرده و ذخیره را بزنید

                    </p>

                </section>
            </section>
        </section>
    </section>

@endsection

