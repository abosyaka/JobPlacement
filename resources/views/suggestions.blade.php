@extends('layouts.app')

@section('title-block')
    Our Suggestions
@endsection

@section('content')
    <main>
        @foreach($suggestions as $vacancy)
            <div class="jumbotron">
                <h1 class="display-4">{{$vacancy->title}}</h1>
                <p class="lead">We need {{$vacancy->position}}</p>
                <hr class="my-4">
                <p>Salary: {{$vacancy->salary}} KZT</p>
                <p class="lead">
                    <a class="btn btn-warning btn-lg" href="{{ url('/vacancyDetails', [$vacancy->id]) }}">Learn more</a>
                </p>
            </div>
        @endforeach
    </main>
@endsection
