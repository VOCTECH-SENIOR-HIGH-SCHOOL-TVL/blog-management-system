@extends('pages.profile_page')

@section('content')
    <div class="dashboard-div" style="margin-left: 0;margin-bottom: 20px">
        @if ($post)
            <h3>Edit Post: {{$post->title}}</h3>
        @else
            <p>Post not found.</p>
        @endif
    </div>
    <div class="row mt-4">
        <div class="col-sm-12">
            <form method="POST" class="form-group" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title" class="mb-2">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
                </div>

                <div class="form-group">
                    <label for="short_description" class="mb-2">Short Description:</label>
                    <input type="text" name="short_description" id="short_description" class="form-control" value="{{ old('short_description', $post->short_description) }}">
                </div>

                <div style="margin-bottom: 30px">
                    <label for="content">Content:</label>
                    <textarea name="content" id="myeditorinstance" class="form-control" rows="5" required>{{ old('content', $post->content) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="picture" class="mb-2">Picture:</label>
                    <input type="file" name="picture" id="picture">
                </div>
                <a class="btn btn-success" href="/posts">Back</a>
                <button type="submit" class="btn btn-primary button-hover">Save</button>
            </form>
        </div>
    </div>
@endsection