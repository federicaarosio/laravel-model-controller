@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row">

        @foreach ($movies as $movie)
        <div class="col-3 mb-4">
            <div class="card" style="width: 18rem; height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie -> title }}</h5>
                    <div class="card-text">Original title: {{ $movie -> original_title }}</div>
                    <div class="card-text">Nationality: {{ $movie -> nationality }}</div>
                    <div class="card-text">Release date: {{ $movie -> date }}</div>
                    <div class="card-text">Vote: {{ $movie -> vote }}</div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>



@endsection

