<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        * {
            color: white;
            font-family: courier;

            transition-duration: inherit;
            transition-duration: 500ms;
        }
    </style>

</head>

<body>
    <div class="bg-image d-flex justify-content-center align-items-center"
        style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); height: 100vh">
        <div>
            <h1>Hola mundo</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="{{route("welcome")}}">Home</a>
                        <a class="nav-link" href="{{route("three")}}">Features Three.js</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1000">    
            <h1 style="color: black"> Hola</h1>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="d-flex justify-content-center">    
            <h1 style="color: black"> Hola</h1>
        </div>
    </div>



    <footer>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>