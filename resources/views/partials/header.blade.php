<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <header>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center header-s">
                    <div class="col-2">
                        <div class="img-container">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc Logo">
                        </div>
                    </div>
                    <div class="col-10">
                        <ul class="d-flex align-items-center text-uppercase list-unstyled">
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">characters</a>
                            </li>
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">comics</a>
                            </li>
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">movie</a>
                            </li>
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">tv</a>
                            </li>
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">games</a>
                            </li>
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">collectebles</a>
                            </li>
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">videos</a>
                            </li>
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">fans</a>
                            </li>
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">news</a>
                            </li>
                            <li class="padding-hr">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">shop</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="jumbotron">
                <div class="box-btn">
                    <button class="btn btn-primary p-2 text-uppercase">current series</button>
                </div>
            </div>
        </header>
    </main>
</body>

</html>