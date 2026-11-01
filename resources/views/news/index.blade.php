@extends('layouts.app')

@section('title', 'All News')

@section('content')
<h1>All News</h1>
<a href="{{ route('news.create') }}">+ Create News</a>

@forelse ($news as $id => $item)
<h2><a href="{{ route('news.show', $id) }}">{{ $item['title'] }}</a></h2>
<p>{{ $item['content'] }}</p>
@empty
<p>No news yet.</p>
@endforelse
@endsection