<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src={{asset("js/anime.min.js")}}></script>

    <style>
        * {
            font-family: courier;
            border: 1px solid #000;
            /* transition-duration: inherit;
            transition-duration: 500ms; */
        }
        .container {
            background-image: url("{{asset('img/webb.png')}}");
            box-shadow: 0px 20px 50px grey;
            border-radius: 10px;
        }
        canvas{

            margin-left: 0.20%;
        }

        p{
            font-size: 150%;
        }
        /* scroll bar */
        body::-webkit-scrollbar {
            width: 0.5em;
            height: 0.5em;
            background-color: black;
        }
        
        body::-webkit-scrollbar-thumb {
            background-color: #4e1511;
            outline: 1px solid #4e1511;
            border-radius: 10px;
        }
        /* scroll bar */

        #titulo{
        font-size:6vw;
        letter-spacing:0.2em;
        text-decoration:none;
        color:white;
        background:linear-gradient(to right,#363636 0%,#363636 100%);
        background-repeat: no-repeat;
        background-position: left 100%;
        transition-duration: 1s;
        background-size: 0 6%;
        }
        #titulo:hover{
            background-size:100% 6%;
            color: #363636;
        }
 
    </style>
</head>
<body>
    @include('layouts.base-nav')
    @yield('content')

    <footer class="mt-5">
        <div class="container-fluid  bg-black">
            <div class="row">
                <ul class="nav justify-content-end align-items-center" style="height: 100px;">
                    <li>
                        @if (Route::has('login'))
                        <div>
                            @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                            <a href="{{ route('login') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </footer>


    <!-- Jquery -->
    <script src="{{asset("js/tilt.jquery.js")}}"></script>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
</body>
</html>