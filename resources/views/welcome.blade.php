@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <pre>
                    {{-- {{ var_dump($movies);  }}
                    {{ print_r($movies);  }}
                    {{ ddd('$movies);  }} --}}

                    {{-- @dump("movies")
                    @dd("movies") --}}
                </pre>
                {{-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, delectus ad esse illum omnis earum eligendi sint a minus quasi, inventore nulla autem. Maxime voluptatem eligendi veniam voluptates. Soluta, sunt!</p> --}}
            </div>
        </div>
    </div>
    <div class="row g-4">
        @foreach ($movies as $movie)
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
        @endforeach
    </div>

</div>
@endsection