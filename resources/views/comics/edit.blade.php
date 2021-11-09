@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="{{ route('comics.update', $comic['id']) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <h1 class="font-m primary-text mt-5">Modifica del fumetto: <span class="lightgray-text font-xs">{{$comic['title']}}</span></h1>
                        <p class="font-xxs my-5 lightgray-text">
                            La modifica avverà con metodo PUT e non PETCH quindi ogni qual volta che si apporta una modifica tutti i dati vengono modificati, in poche parole se in un input non viene inserito nulla quel campo avrà valore NULL all'interno del database sempre che possa essere nullable altrimenti sarete costretti a inserire un valore per proseguire e in questo caso nessun valore e nullable :)
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of the comic" value="{{ $comic['title'] }}">

                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>

                        <textarea class="form-control" id="description" name="description" > {!! $comic['description'] !!} </textarea>

                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter the series of the comic" value="{{ $comic['series'] }}">
                        
                        @error('series')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Seleziona --</option>
                            <option value="comic book" {{ $comic['type'] == 'comic book' ? 'selected' : NULL }}>comic book</option>
                            <option value="graphic novel" {{ $comic['type'] == 'graphic novel' ? 'selected' : NULL}}>graphic novel</option>
                        </select>

                        @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumb">Image</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter comic image" value="{{ $comic['thumb'] }}">

                        @error('thumb')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Select the sales date</label>
                        <input class="form-control" type="date" id="sale_date" name="sale_date" value="{{ $comic['sale_date'] }}">

                        @error('sale_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="weight">Price</label>
                        <input class="form-control" type="number" required name="price" min="0" placeholder="Price" step=".01" value="{{ $comic['price'] }}">

                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection