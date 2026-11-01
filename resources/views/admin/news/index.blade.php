@extends('layouts.app')

@section('title', 'Admin - News')

@section('content')
<h1>Admin - All News</h1>
<a href="{{ route('news.create') }}">+ Create News</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>

    @forelse ($news as $id => $item)
    <tr>
        <td>{{ $id }}</td>
        <td>{{ $item['title'] }}</td>
        <td>
            <a href="{{ route('news.show', $id) }}">View</a>

            <form method="POST" action="{{ route('admin.news.destroy', $id) }}"
                style="display:inline" onsubmit="return confirm('Delete this news?')">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="3">No news.</td>
    </tr>
    @endforelse
</table>
@endsection