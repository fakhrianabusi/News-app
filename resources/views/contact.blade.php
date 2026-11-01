@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<h1>Contact Us</h1>

<form action="{{ route('contact.send') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="enter your name" value="{{ old('name') }}">
    @error('name') <span style="color:red">{{ $message }}</span> @enderror
    <input type="submit" value="Send">
</form>
@endsection