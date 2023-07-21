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
       <footer>
            <div class="jumbotron-footer">
                <div class="container">
                    <div class="row dc-background">
                        <div class="col d-flex p-top-footer">
                            <div class="footer-one">
                                <h2 class="text-uppercase text-white">dc comics</h2>
                                <ul class="list-unstyled">
                                    @foreach($objs as $obj)
                                        <li>
                                            <a class="text-white" href="" >{{ $obj['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
       </footer>
    </main>
</body>

</html>