@extends('layouts.app')

@section('content')
<main>
    <h1> Homepage </h1>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">

            @foreach ($movies as $movie)
            <div class="col">
                <img class="card-img-top" src=" " alt="">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$movie->title}}</h4>
                        <h6 class="card-subtitle text-muted">{{$movie->original_title}}</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Data uscita: {{$movie->date}} </p>
                        <p class="card-text">Nazionalità: {{$movie->nationality}} </p>
                        <p class="card-text">Voto: {{$movie->vote}}</p>
                    </div>

                </div>
            </div>
            @endforeach

        </div>

    </div>

</main>
@endsection