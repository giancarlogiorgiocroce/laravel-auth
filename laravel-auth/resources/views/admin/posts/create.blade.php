@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titolo del Post</label>
            <input type="text" value="{{old('title')}}"
                class="form-control"
                id="title" name="title"
                placeholder="Scrivi qualcosa"
            >
        </div>

        <div class="form-group">
            <label for="content">Contenuto del Post</label>
            <textarea type="text" value="{{old('content')}}"
                    class="form-control"
                    id="content" name="content"
                    placeholder="Scrivi qualcosa">
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
