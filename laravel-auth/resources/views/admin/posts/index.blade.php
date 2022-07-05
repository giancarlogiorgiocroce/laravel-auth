@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="mb-4">Index della CRUDe</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Content</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)

                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->content }}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection
