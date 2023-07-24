@extends('layouts.app')

@section('content')
    <!-- COMICS PART -->
    <div class="jumbotron-black">
        <div class="container position-relative">
            <div class="box-btn position-absolute ">
                <button class="btn btn-primary py-2 px-4 text-uppercase fw-bold fs-4 rounded-0 ">current
                    series</button>
            </div>
            <div class="row">
                <div class="col d-flex flex-wrap my-5">
                    @foreach ($products as $id => $product)
                        <div class="card-content mx-2 my-2">
                            <div class="img-container-2">
                                <a href="{{ route('pallo', $id) }}"><img class="card" src="{{ $product['thumb'] }}"
                                        alt="{{ $product['title'] }}"></a>
                            </div>
                            <h6>{{ $product['series'] }}</h6>
                        </div>
                    @endforeach
                </div>
                <div class="col-button w-100% d-flex justify-content-center my-4">
                    <button class="btn btn-primary text-uppercase py-2 px-5 rounded-0 fw-bolder">load more</button>
                </div>
            </div>
        </div>
        <!-- LIST SHOPPING -->
        <div class="jumbotron-blue">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="d-flex">
                            @foreach ($lists as $list)
                                <li class="d-flex align-items-center">
                                    <div class="merch-img">
                                        <img src="{{ Vite::asset($list['immg']) }}" alt="{{ $list['lable'] }}">
                                    </div>
                                    <h4 class="uppercase text-white ms-2"> {{ $list['lable'] }}</h4>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
