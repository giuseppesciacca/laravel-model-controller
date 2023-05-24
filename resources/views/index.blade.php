@extends('layouts.app')

@section('content')
<main class="bg-dark py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-3 justify-content-center">

            @foreach ($movies as $movie)
            <div class="col">

                <div class="card h-100">
                    <img class="card-img-top" src="{{$movie->img_path}}" alt="">
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