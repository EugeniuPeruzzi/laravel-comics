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
    <!-- HEADER -->
    @include('partials.header')
    <!-- MAIN -->
    <main>
    <div class="jumbotron-black">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-wrap">
                            @foreach($products as $product)    
                                <div class="card" style="width: 18rem;">
                                    <img src=" {{ $product['thumb'] }} " class="card-img-top" alt="">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-button ">
                            <button class="btn">load more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumbotron-blue">
                <div class="container container-blue">
                    <div class="content">
                        <ul class="d-flex">
                            <li :key="index" v-for="(list, index) in lists" class="d-flex align-center">
                                <div class="img-container">
                                    <img :src="list.immg" :alt="list.lable">
                                </div>
                                <h4 class="uppercase"></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>