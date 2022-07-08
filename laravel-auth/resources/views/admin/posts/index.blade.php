@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row d-flex justify-content-between align-items-center">
            <h1 class="mb-4">Index della CRUDe</h1>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-warning">Crea nuovo Post</a>
        </div>


        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)

                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->content }}</td>
                    <td class="d-flex">
                        <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">Visualizza</a>
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn mx-3 btn-success">Modifica</a>
                        <a href="#" class="btn btn-danger">Cancella</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection
