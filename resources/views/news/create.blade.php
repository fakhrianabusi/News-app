@extends('layouts.app')

@section('title', 'Create News')

@section('content')
<h1>Create Page</h1>

<form id="newsForm">
    <p>ID: <input type="number" id="id" min="1" required></p>
    <p>Title: <input type="text" id="title" required></p>
    <p>Content: <textarea id="content" required></textarea></p>
    <button type="submit">Create News</button>
</form>

<script>
    document.getElementById('newsForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // نستبدل "/" بـ "-" حتى لا يُكسر الرابط
        let id = document.getElementById('id').value;
        let title = encodeURIComponent(document.getElementById('title').value.replaceAll('/', '-'));
        let content = encodeURIComponent(document.getElementById('content').value.replaceAll('/', '-'));

        window.location.href = "{{ url('/news/store') }}/" + id + "/" + title + "/" + content;
    });
</script>
@endsection