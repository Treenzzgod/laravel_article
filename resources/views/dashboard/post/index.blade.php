@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<a href="{{ route('dashboard.create') }}" class="btn btn-success">Add Article</a>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $posting)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $posting->title }}</td>
                    <td>{{ $posting->slug }}</td>
                    <td>
                        <a href="{{ route('dashboard.show', $posting->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('dashboard.edit', $posting->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('dashboard.destroy', $posting->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $post->links() }}
</div>
@endsection
