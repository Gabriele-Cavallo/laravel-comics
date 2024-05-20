@extends('layouts.app')

@section('content')
    <section id="home">
        <div class="container">
            <ul>
                @foreach ($comics as $comic)
                    <li>
                        <img src="{{ $comic['thumb'] }}" alt="comics">
                        <h4>{{ $comic['title'] }}</h4>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection