@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            div .content {
                width: 100vw;
                height: 100vh;
                margin-top: -2rem;
                background: cover center url("/image/for_web.png");
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            h1{

            }
        </style>
    </head>
    <body style="background-color:white">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" style="
                width: 99vw;
                height: 98vh;
                margin-top: -2rem;
                background-image: url('image/for_web.png');
                background-size: 90%;
                background-position: 113% center;
                background-repeat: no-repeat;
            ">

            <div
                class="text_conteiner"
                style="
                    position: absolute;
                    transform: translateY(-50%);
                    top: 48%;
                    left: 10%;
                    font-size: 20vw;
                ">
                <h1 style="
                    font-size: 5vw;
                    font-family: 'circular';
                ">best place </h1>
                <h1 style="
                    font-size: 5vw;
                    font-family: 'circular';
                ">for web dev</h1>
            </div>




            </div>

            <div class="content" style="
                width: 99vw;
                height: 98vh;
                position: relative;

            ">
            <div class="content" style="
                width: 100%;
                height: 100%;
                background-image: url('image/imac_finished.png');
                background-size: cover;
                background-position: -880% center;
                background-repeat: no-repeat;
                transform:scaleX(-1);
            "></div>

            <div
                class="text_conteiner"
                style="
                    position: absolute;
                    transform: translateY(-50%);
                    top: 48%;
                    right: 7%;
                ">
                <h1 style="
                    font-size: 5vw;
                    font-family: 'circular';
                ">we have dev work </h1>
                <h1 style="
                    font-size: 5vw;
                    font-family: 'circular';
                ">in al areas</h1>
            </div>

            </div>




            </div>
        </div>
    </body>
</html>
@endsection
