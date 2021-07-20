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
                    {{--<a href="#" class="btn btn-info btn-sm">ایجاد دسته بندی</a>--}}
                    {{--<div class="width-16-rem">--}}
                        {{--<input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">--}}
                    {{--</div>--}}
                </section>

            {{--    <section class="table-responsive">
                    <form id="merchant_id_submit" method="POST" action="">
                        {{ csrf_field() }}
                        <input type=text name=merchant placeholder="مرچنت کد درگاه" value="{{ old('merchant') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span ><strong>{{ $errors->first('email') }}</strong></span>
                        @endif

                        <br><br/>


                        <input type="submit" style="font-family: IRAN Sans, serif"   value="ذخیره">
                    </form>
                  --}}{{--  <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام دسته بندی</th>
                            <th>دسته والد</th>
                            <th><i class="fa fa-cogs"></i>تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                     --}}{{----}}{{--   <tr>
                            <th>1</th>
                            <td>نمایشگر	</td>
                            <td>کالای الکترونیکی</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i>حذف</button>
                            </td>
                        </tr>--}}{{----}}{{--
                   --}}{{----}}{{--     <tr>
                            <th>2</th>
                            <td>نمایشگر	</td>
                            <td>کالای الکترونیکی</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i>حذف</button>
                            </td>
                        </tr>--}}{{----}}{{--
                      --}}{{----}}{{--  <tr>
                            <th>3</th>
                            <td>نمایشگر	</td>
                            <td>کالای الکترونیکی</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i>حذف</button>
                            </td>
                        </tr>--}}{{----}}{{--
                        </tbody>
                    </table>--}}{{--
                </section>--}}
           {{--     @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif--}}
                <form id="admin_info_submit" method="POST" action="{{ route('admininfo.send') }}">
                    {{ csrf_field() }}
                    <input class="form-control" type=text name=adminName placeholder="نام ادمین" value="{{ 'adminName' }}" required autofocus>
                    <br>
                    <input class="form-control" type=email name=adminEmail placeholder="ایمیل ادمین" value="{{ 'adminEmail' }}" required autofocus>
                    <br>
                    <input class="form-control" type=password name=adminPassword placeholder="پسورد ادمین" value="{{ 'adminPassword' }}" required autofocus>
                  {{--  @if ($errors->has('merchant'))
                        <span ><strong>{{ $errors->first('merchant') }}</strong></span>
                    @endif--}}

                    <br>



                    <input class="btn btn-success btn-md" type="submit" style="font-family: IRAN Sans, serif"   value="ذخیره">
               {{--     <a href="{{ route('http://127.0.0.1:8000/admin') }}" type="submit" class="btn btn-info" role="button">ذخیره</a>
              --}}  </form>
            </section>
        </section>
    </section>

@endsection
