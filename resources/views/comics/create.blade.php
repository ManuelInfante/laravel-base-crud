@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of the comic">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>

                        <textarea class="form-control" id="description" name="description" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter the series of the comic">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Seleziona --</option>
                            <option value="comic book">comic book</option>
                            <option value="graphic novel">graphic novel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="thumb">Image</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter comic image">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Select the sales date</label>
                        <input class="form-control" type="date" id="sale_date" name="sale_date">
                    </div>
                    <div class="form-group">
                        <label for="weight">Price</label>
                        <input class="form-control" type="number" required name="price" min="0" placeholder="Price" step=".01">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection