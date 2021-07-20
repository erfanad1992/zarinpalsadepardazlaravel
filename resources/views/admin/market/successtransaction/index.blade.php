@extends('admin.layouts.master')

@section('head-tag')
    <title>تراکنشهای موفق</title>
@endsection


@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12">خانه</li>
            <li class="breadcrumb-item font-size-12">بخش تراکنشها</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">تراکنشهای موفق</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        تراکنشهای موفق
                    </h5>
                </section>
{{--
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom">
                    --}}{{--<a href="#" class="btn btn-info btn-sm">ایجاد دسته بندی</a>--}}{{--
                    --}}{{--<div class="width-16-rem">--}}{{--
                        --}}{{--<input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">--}}{{--
                    --}}{{--</div>--}}{{--
                </section>--}}

                <section class="table-responsive">

                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>

                            <th>نام کاربر</th>
                            <th>ایمیل کاربر</th>
                            <th>موبایل کاربر</th>
                            <th>شناسه تراکنش</th>
                            <th>مبلغ</th>
                            <th>وضعیت تراکنش</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>

                                <td>{{ $transaction->fullname }}</td>
                                <td>{{ $transaction->email }}</td>
                                <td>{{ $transaction->mobile }}</td>
                                <td>{{ $transaction->refid }}</td>
                                <td>{{ $transaction->Amount }}</td>
                                <td>{{ $transaction->Status }}</td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </section>

            </section>
        </section>
    </section>

@endsection
