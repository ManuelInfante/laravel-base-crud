@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <h1 class="mt-4 mb-4 me-5 primary-text">Elenco fumetti</h1>
                    <a href="{{ route('comics.create') }}"
                        class="btn btn-warning white-text">
                        Add new Comic
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Series</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic['id'] }}</th>
                                <td>{{ $comic['title'] }}</td>
                                <td>{{ $comic['series'] }}</td>
                                <td>{{ $comic['price'] }} &euro;</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic['id']) }}"
                                        class="btn btn-info white-text">
                                        Details
                                    </a>
                                    <a href="{{ route('comics.edit', $comic['id']) }}"
                                        class="btn btn-success white-text ms-3">
                                        Modify
                                    </a>
                                    <form action="{{ route('comics.destroy', $comic['id']) }}" method="post" class="d-inline-block ms-3">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        
    </div>
@endsection