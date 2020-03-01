        @extends('layouts.app')
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
                flex-direction: column;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
                color: #1da1f2;
            }

            .links > a {
                color: #ffffff;
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
        </style>
    @section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Welcome to Twittstart
                </div>
            </div>

            @if (Route::has('login'))
                <div class="links">
                    @auth
                    @else
                        <a href="{{ route('login') }}" class="btn btn-info mr-4 py-2 rounded" role="button">Sign in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-info ml-4 py-2 rounded" role="button">Sign up</a>
                    @endif
                    @endauth
                </div>
            @endif
        </div>
    @endsection
