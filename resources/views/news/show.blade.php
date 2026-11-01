@extends('layouts.app')

@section('title', $item['title'])

@section('content')
<h1>{{ $item['title'] }}</h1>
<p>{!! nl2br(e($item['content'])) !!}</p>

<a href="{{ route('news.index') }}">Back to news</a>
@endsection