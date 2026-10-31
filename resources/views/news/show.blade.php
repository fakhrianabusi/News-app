@extends('layouts.app')

@section('content')
    <h1>{{ $item['title'] }}</h1>
    <p>{{ $item['content'] }}</p>

    <a href="{{ url('/news') }}">Back to news</a>
@endsection