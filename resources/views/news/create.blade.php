@extends('layouts.app')

@section('content')
<h1>Create Page</h1>

<form id="newsForm">
    <p>
        ID: <input type="number" id="id" min="1" required>
    </p>

    <p>
        Title: <input type="text" id="title" required>
    </p>

    <p>
        Content: <textarea id="content" required></textarea>
    </p>

    <button type="submit">Create News</button>
</form>

<script>
    document.getElementById('newsForm').addEventListener('submit', function(e) {
        e.preventDefault(); // نمنع الإرسال العادي للفورم

        let id = document.getElementById('id').value;
        let title = encodeURIComponent(document.getElementById('title').value);
        let content = encodeURIComponent(document.getElementById('content').value);

        // نبني الرابط بنفس شكل الـ Route
        window.location.href = "{{ url('/news/create') }}/" + id + "/" + title + "/" + content;
    });
</script>

@if (session('error'))
<p style="color:red">{{ session('error') }}</p>
@endif

@endsection