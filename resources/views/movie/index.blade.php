@extends('layouts.app')

@section('main-content')


    @foreach ($movies as $movie)
        <article>
            {{ $movie -> title }}
        </article>
    @endforeach


@endsection

