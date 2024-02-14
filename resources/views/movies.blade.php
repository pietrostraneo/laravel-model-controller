@extends('layouts.app')

@section('main-content')
    <main class="vw-100 vh-100">
        <div class="container">
            <div class="row justify-content-center mt-5 d-flex">
                @foreach ($movies as $movie)
                    <div class="col-3 my-2">
                        <div class="my-card">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">ID: {{ $movie->id }}</p>
                            <p class="card-text">Vote: {{ $movie->vote }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
