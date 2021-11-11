@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div>
                        <h1 class="primary-text font-m my-5 text-uppercase">Crea un nuovo fumetto</h1>
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of the comic" value="{{ old('title')}}">

                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>

                        <textarea class="form-control" id="description" name="description" >{{ old('description')}}</textarea>

                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter the series of the comic" value="{{ old('series')}}">

                        @error('series')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Seleziona --</option>
                            <option value="comic book" {{ old('type') == 'comic book' ? 'selected' : NULL }}>comic book</option>
                            <option value="graphic novel" {{ old('type') == 'graphic novel' ? 'selected' : NULL }}>graphic novel</option>
                        </select>

                        @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumb">Image</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter comic image" value="{{ old('thumb')}}">

                        @error('thumb')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Select the sales date</label>
                        <input class="form-control" type="date" id="sale_date" name="sale_date" value="{{ old('sale_date')}}">

                        @error('sale_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input class="form-control" type="number" required name="price" min="0" placeholder="Price" step=".01" value="{{ old('price')}}">

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