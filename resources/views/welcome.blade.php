@extends('layouts.app')

@section('main-content')
    <main class="vw-100 vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-focus-in">
                    <h1 class="title ">BENVENUTO</h1>
                    <a href="{{ Route('movies') }}"><button class="btn btn-outline-danger btn-lg">VISUALIZZA FILM</button></a>
                </div>
            </div>
        </div>
    </main>
@endsection
