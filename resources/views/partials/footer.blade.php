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
                    <div class="row dc-background pt-5">
                        <div class="col d-flex flex-row">
                            <div class="footer-one me-5">
                                <!-- DC COMICS -->
                                <h2 class="text-uppercase text-white">dc comics</h2>
                                <ul class="list-unstyled">
                                    @foreach($objs as $obj)
                                        <li>
                                            <a class="linkz" href="#" >{{ $obj['label'] }}</a>
                                        </li>
                                    @endforeach                                    
                                </ul>
                                <!-- SHOP -->
                                <h2 class="text-uppercase text-white">shop</h2>
                                <ul class="list-unstyled">
                                    @foreach($mini_lists as $obj)
                                        <li>
                                            <a class="linkz" href="#" >{{ $obj['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="footer-two me-5">
                                <!-- DC -->
                                <h2 class="text-uppercase text-white">dc</h2>
                                <ul class="list-unstyled">
                                    @foreach($dc_s as $obj)
                                        <li>
                                            <a class="linkz" href="#" >{{ $obj['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="footer-three">
                                <!-- SITES -->
                                <h2 class="text-uppercase text-white">sites</h2>
                                <ul class="list-unstyled">
                                    @foreach($sites as $obj)
                                        <li>
                                            <a class="linkz" href="#" >{{ $obj['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </footer>
    </main>
</body>

</html>