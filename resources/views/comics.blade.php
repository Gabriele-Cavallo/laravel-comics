@extends('layouts.app')

@section('content')
    <section id="main">
        <div class="container">
            <div class="badge series">CURRENT SERIES</div>
            <ul>
                @foreach ($comics as $comic)
                    <li>
                        <img src="{{ $comic['thumb'] }}" alt="comics">
                        <h4>{{ $comic['title'] }}</h4>
                    </li>
                @endforeach
            </ul>
            <div class="badge load">LOAD MORE</div>
        </div>
    </section>
@endsection