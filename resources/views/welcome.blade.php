<!doctype html>
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

            .content {
                text-align: center;
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
        </style>
        <title>husnul</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
	
	
	<link href="assets/common-css/ionicons.css" rel="stylesheet">
	
	
	<link rel="stylesheet" href="asset/common-css/jquery.classycountdown.css" />
		
	<link href="assets/07-comming-soon/css/styles.css" rel="stylesheet">
	
	<link href="assets/07-comming-soon/css/responsive.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
            <div class="main-area center-text" style="background-image:url(assets/images/countdown-6-1600x900.jpg);" >
		        <div class="display-table">
			    <div class="display-table-cell">
                    Welcome Beauty Cosmetics Ollshop
                </div>
            </div>
            </div><!-- display-table -->
		</div><!-- display-table-cell -->
	</div><!-- main-area -->
</div>
<script src="{{asset('assets/common-js/jquery-3.1.1.min.js')}}"></script>
	
	<script src="{{asset('assets/common-js/jquery.countdown.min.js')}}"></script>
	
	<script src="{{asset('assets/common-js/scripts.js')}}"></script>
    </body>
</html>
