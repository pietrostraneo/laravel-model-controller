@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center ">
                    <ul>
                        @foreach ($movies as $movie)
                            <li>

                                <div class="d-flex">
                                    <p>
                                    <h2>{{ $movie->title }}</h2> (ID: {{ $movie->id }})</p>
                                </div>
                                <p>{{ $movie->original_title }}</p>
                                <p>Nationality: {{ $movie->nationality }}</p>
                                <p>Release date: {{ $movie->date }}</p>
                                <p>Vote: {{ $movie->vote }}</p>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
