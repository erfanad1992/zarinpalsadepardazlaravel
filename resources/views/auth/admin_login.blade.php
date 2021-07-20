
{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <title> پنل ادمین</title>
</head>
<body>
<div >
    <div >

        <div >
            <div >
                <div >
                    <form id="sign_in_adm" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}
                        <h1>Admin Login</h1>
                        <div >
                            <input type=email name=email placeholder="آدرس ایمیل" value="{{ old('email') }}" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                            <span ><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                        <br>
                        <div >
                            <input type=password name=password placeholder="کلمه عبور" required>
                        </div>
                        <br>
                        <div >
                            <button type=submit >SIGN IN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div ></div>
    </div>
</div>
</body>
</html>--}}
{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

{{--<link href="//db.onlinewebfonts.com/c/766132c828a90cbecf6f7f4027d12725?family=IRAN+Sans" rel="stylesheet"
      type="text/css"/>--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>--}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>




<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fa" lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <title>ورود به پنل ادمین</title>
</head>

<body>
<div class="wrapper" lang="fa">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->

        <div style="font-weight: normal; font-family: IRAN Sans, serif; margin-bottom: 20px;margin-top: 20px;">
            جهت ورود به پنل ادمین فرم زیر را پر کنید
        </div>

        <!-- Login Form -->
        {{--class="fadeIn second"--}}
        {{-- class="fadeIn third"--}}{{----}}
        <form id="sign_in_adm" method="POST" action="{{ route('admin.login.submit') }}">
            {{ csrf_field() }}
            <input type=email name=email placeholder="آدرس ایمیل" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span ><strong>{{ $errors->first('email') }}</strong></span>
            @endif

            <input type=password name=password placeholder="کلمه عبور" required>
            <br><br/>


            <input type="submit" style="font-family: IRAN Sans, serif"   value="ورود به پنل ادمین">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter" style="text-align: center">

        </div>

    </div>
</div>
</body>
</html>
<!------ Include the above in your HEAD tag ---------->


<style>

    /* BASIC */

    @import url('https://cdn.fontcdn.ir/Font/Persian/Yekan/Yekan.css');
    html {
        background-color: #ffffff;
    }

    @font-face {
        font-family: "IRAN Sans";
        src: url("//db.onlinewebfonts.com/t/766132c828a90cbecf6f7f4027d12725.eot");
        src: url("//db.onlinewebfonts.com/t/766132c828a90cbecf6f7f4027d12725.eot?#iefix") format("embedded-opentype"),
        url("//db.onlinewebfonts.com/t/766132c828a90cbecf6f7f4027d12725.woff2") format("woff2"),
        url("//db.onlinewebfonts.com/t/766132c828a90cbecf6f7f4027d12725.woff") format("woff"),
        url("//db.onlinewebfonts.com/t/766132c828a90cbecf6f7f4027d12725.ttf") format("truetype"),
        url("//db.onlinewebfonts.com/t/766132c828a90cbecf6f7f4027d12725.svg#IRAN Sans") format("svg");
        font-weight: normal;
        font-size: large;
    }

    @font-face {
        font-family: "Vazir";
        src: url("https://cdnjs.cloudflare.com/ajax/libs/vazir-font/29.1.0/Vazir-Black.eot");
        src: url("https://cdnjs.cloudflare.com/ajax/libs/vazir-font/29.1.0/Vazir-Black.eot?#iefix") format("embedded-opentype"),
        url("https://cdnjs.cloudflare.com/ajax/libs/vazir-font/29.1.0/Vazir-Black.woff") format("woff"),
        url("https://cdnjs.cloudflare.com/ajax/libs/vazir-font/29.1.0/Vazir-Black.ttf") format("truetype"),
        url("https://cdnjs.cloudflare.com/ajax/libs/vazir-font/29.1.0/Farsi-Digits-Without-Latin/font-face-FD-WOL.css")

    }
    /*  @font-face {
          font-family: 'yekan';
          font-style: normal;
          font-weight: 300;
          src:url("../fonts/yekan.eot?#") format('embedded-opentype'),
          url("../fonts/yekan.woff") format('woff'),
          url("../fonts/yekan.ttf") format('truetype');
      }*/

    @font-face {
        font-family: 'Yekan';
        src: url('https://cdn.fontcdn.ir/Font/Persian/Yekan/Yekan.eot');
        src: url('https://cdn.fontcdn.ir/Font/Persian/Yekan/Yekan.eot?#iefix') format('embedded-opentype'),
        url('https://cdn.fontcdn.ir/Font/Persian/Yekan/Yekan.woff') format('woff'),
        url('https://cdn.fontcdn.ir/Font/Persian/Yekan/Yekan.ttf') format('truetype');

        font-size: large;
    }

    body {
        /* font-family: "Vazir" , vazir;*/
        /*    font-family: 'Yekan', sans-serif;*/
        height: 100vh;
    }

    a {
        color: #92badd;
        display: inline-block;
        text-decoration: none;
        font-weight: 400;
    }

    h2 {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        display: inline-block;
        margin: 40px 8px 10px 8px;
        color: #cccccc;
    }


    /* STRUCTURE */

    .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
    }

    #formContent {
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 450px;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    #formFooter {
        background-color: #f6f6f6;
        border-top: 1px solid #dce8f1;
        padding: 25px;
        text-align: center;
        -webkit-border-radius: 0 0 10px 10px;
        border-radius: 0 0 10px 10px;
    }


    /* TABS */

    h2.inactive {
        color: #cccccc;
    }

    h2.active {
        color: #0d0d0d;
        border-bottom: 2px solid #5fbae9;
    }


    /* FORM TYPOGRAPHY*/

    input[type=button], input[type=submit], input[type=reset] {
        background-color: #2ecc71;
        border: none;
        color: white;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover {
        background-color: #2ecc71;
    }

    input[type=button]:active, input[type=submit]:active, input[type=reset]:active {
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
    }

    input[type=text] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    input[type=number] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    input[type=password] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    input[type=email] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus {
        background-color: #fff;
        border-bottom: 2px solid #5fbae9;
    }

    input[type=text]::placeholder {
        color: #cccccc;
    }

    input[type=number]::placeholder {
        color: #cccccc;
    }

    input[type=email]::placeholder {
        color: #cccccc;
    }


    /* ANIMATIONS */

    /* Simple CSS3 Fade-in-down Animation */
    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @-moz-keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .fadeIn {
        opacity: 0;
        -webkit-animation: fadeIn ease-in 1;
        -moz-animation: fadeIn ease-in 1;
        animation: fadeIn ease-in 1;

        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        animation-duration: 1s;
    }

    .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
    }

    /* Simple CSS3 Fade-in Animation */
    .underlineHover:after {
        display: block;
        left: 0;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: #56baed;
        content: "";
        transition: width 0.2s;
    }

    .underlineHover:hover {
        color: #0d0d0d;
    }

    .underlineHover:hover:after {
        width: 100%;
    }


    /* OTHERS */

    *:focus {
        outline: none;
    }

    #icon {
        width: 60%;
    }
</style>

