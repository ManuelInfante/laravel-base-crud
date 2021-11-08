@extends('layouts.app')

@section('content')
    <div class="container d-flex mt-5">
        <div>
            <img src="{{$comic['thumb']}}" alt="">
        </div>

        <div class="ms-5">
            <h1 class="primary-text mb-0">
                {{$comic['title']}}
            </h1>

            <div class="mb-4">
                <span class="font-min lightgray-text">
                    Series: {{$comic['series']}}
                </span>
                <span class="font-min lightgray-text"> / </span>
                <span class="font-min lightgray-text"> 
                    Type: {{$comic['type']}}
                </span>
            </div>
            
            <p class="font-xxs">
                {{$comic['description']}}
            </p>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <div>
                    <span>Price: </span>
                    <span class="primary-text">{{$comic['price']}} &euro;</span>
                </div>

                <div>
                    <a href="" class="btn btn-light">&hearts;</a>
                    <a href="" class="btn btn-primary ms-3">Buy now!</a>
                </div>
            </div>
        </div>
    </div>
@endsection