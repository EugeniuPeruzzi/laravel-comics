@extends('layouts.app')

@section('content')
    <div class="jumbotron-thumbnail">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="img-container-comics">
                        <img src="{{ $product['thumb'] }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <h4>{{ $product['title'] }}</h4>
                <div class="aviability d-flex justify-content-between">
                    <div class="">
                        U.S Price: {{ $product['price'] }}
                    </div>
                    <div class="">Check Aviability</div>
                </div>
                <div class="description mt-3">
                    <p>{{ $product['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="jumbotron-comic">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Talent</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Art by:</th>
                                <td><span>{{ implode(', ', $product['artists']) }}</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Written by:</th>
                                <td><span>{{ implode(', ', $product['writers']) }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Specs</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Series:</th>
                                <td>
                                    <h6>{{ $product['series'] }}</h6>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">U.S. Price:</th>
                                <td><span>{{ $product['price'] }}</span></td>
                            </tr>
                            <tr>
                                <th scope="row">On Sale Date:</th>
                                <td><span>{{ $product['sale_date'] }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $product['title'] }}
    {{ $product['title'] }}
@endsection
