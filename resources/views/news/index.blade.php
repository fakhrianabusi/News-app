@extends('layouts.app')

@section('content')
    <h1>All News</h1>

    @foreach ($news as $id => $item)
        <h2><a href="{{ url('/news/' . $id) }}">{{ $item['title'] }}</a></h2>
        <p>{{ $item['content'] }}</p>
    @endforeach
@endsection