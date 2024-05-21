@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="card m-2 border border-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title bg-primary-subtle ">Title: {{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{ $movie->original_title }}</h6>
                        <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                        <p class="card-text">Date: {{ $movie->date }}</p>
                        <p class="card-text">Vote: {{ $movie->vote }}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
