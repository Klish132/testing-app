@extends('layouts.app')

@section('content')
    <a href="/tests" class="btn btn-outline-secondary">Back</a>
    <h1>{{$test->title}}</h1>
    <div class="card p-3 mt-3 mb-3">
        <h1>{{$test->question}}</h1>
        <small> Correct answer: {{$test->answer}}</small>
    </div>
@endsection