@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        @forelse ($movies as $movie)
            <div class="col-3">
                <div class="card">
                    @if ($movie->cover)
                        <img class="card-img-top" src="{{$movie->cover}}" alt="{{$movie->title}}">
                    @else
                        <img class="card-img-top" src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" alt="{{$movie->title}}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}} ({{$movie->original_title}})</h5>
                        <p class="card-text">
                            Voto: {{$movie->vote}}<br>
                            Data: {{$movie->date}}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                Nessun dato trovato. Sicuro di aver importato il DB?
            </div>
        @endforelse
    </div>

</div>
@endsection