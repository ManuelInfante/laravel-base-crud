@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="home-comics-container container p-5">
        <div class="container d-flex overflow-scroll comics-container">
            @foreach ($comics as $comic)
                <div class="comic-card col-3 text-center p-4 d-flex flex-column justify-content-between">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h2 class="font-s text-uppercase mt-3">{{$comic['title']}}</h2>
                    <a class="btn btn-success" href="{{route('comics.show', $comic['id'])}}">Visualizza fumetto</a>
                </div>
            @endforeach
        </div>
        <div class="message p-2">
            <span>
                Scorri per visualizzare altri fumetti -->
            </span>
        </div>
    </div>
@endsection