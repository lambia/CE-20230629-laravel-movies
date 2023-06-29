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
        <div class="col">
            @foreach ($movies as $movie)
                <div class="movieCard card">
                    <h2>{{$movie->title}} / {{$movie->original_title}}</h2>
                    <span>{{$movie->vote}}</span>
                    @if ($movie->cover)
                        <img src="{{$movie->cover}}" alt="{{$movie->title}}">
                    @else
                        <img src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" alt="{{$movie->title}}">
                    @endif
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection