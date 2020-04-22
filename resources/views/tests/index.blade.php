@extends('layouts.app')

@section('content')
    <h1>Questions</h1>
    @if(count($all_tests) > 0)
        @foreach($all_tests as $test)
            <div class="card p-3 mt-3 mb-3">
                <h3><a href="/tests/{{$test->id}}">{{$test->title}}</a></h3>
                <h2>{{$test->question}}</h2>
            </div>
        @endforeach
        {{$all_tests->links()}}
    @else
        <p>No tests found</p>
    @endif
@endsection