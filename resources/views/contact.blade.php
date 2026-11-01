@extends('layouts.app')

@section('content')
<form action="{{route('contact.send')}}" method="post">
    <input type="text" name="name" placeholder="enter your name">
    <input type="submit" value="Send">
</form>
@endsection