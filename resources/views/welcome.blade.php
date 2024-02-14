@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Benvenuto</h1>
                    <a href="{{ Route('movies') }}"><button class="btn btn-primary">VISUALIZZA FILM</button></a>
                </div>
            </div>
        </div>
    </main>
@endsection
