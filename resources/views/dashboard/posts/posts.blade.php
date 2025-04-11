@extends('pages.profile_page')

<x-titles.posts_title></x-titles.posts_title>

@section('content')
    @if (Auth::check())
        @if(session()->has('success-edit-post'))
            <div style="margin-top: 30px;" class="alert alert-success">
                {{ session()->get('success-edit-post') }}
            </div>
        @endif
        @if(session()->has('success-delete-post'))
            <div style="margin-top: 30px;" class="alert alert-danger">
                {{ session()->get('success-delete-post') }}
            </div>
        @endif
        @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
            <div class="container">
                @if (count($posts) > 0)
                    @foreach ($posts as $post)
                        <div class="col-xs-12 col-md-3">
                            <div class="color-block-wrapper">
                                <div class="color-block color-block-lblue">
                                    <span style="font-size: 1.7rem;">#{{ $post->id }}</span>
                                    <br>
                                    <!-- <hr style="margin:5px 0px;"> -->
                                    <b class="post-title-2 text-capitalize" style="font-size: 1.5rem;">
                                        {{ Str::limit($post->title, 15) }}
                                    </b>
                                    <div class="color-block-text">
                                        <p class="post-text-2" style="font-size: 10px;">
                                            {{ Str::limit($post->short_description, 30) }}
                                        </p>
                                    </div>
                                    <a href="{{route('post.index', $post->slug)}}">
                                        <img class="post-image-2" style="height: 150px; max-width: 200px;"
                                    
                                        @if ($post->picture == '/storage/images/no-picture')

                                            src="{{$post->random}}" 

                                        @else 

                                            src="{{$post->picture}}" 

                                        @endif

                                        alt="{{$post->title}}"
                                        title="{{$post->title}}">
                                    </a>
                                    <p class="post-date" style="color: #fff; margin-top: 10px; font-size: 12px; text-align: center;">Posted: {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</p>
                                    <p class="post-date" style="color: #fff; margin-top: 10px; font-size: 12px; text-align: center;">Likes: {{ $post->likes->count() }}</p>
                                </div>
                                <div style="margin: 20px;" class="text-center">
                                    @if ($post->user_id == auth()->user()->id)
                                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-success btn-group">Edit post</a>
                                    @endif
                                    <form action="{{ route('post.delete', $post->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-group" onclick="confirm('Do you really want to delete this post?')">Delete post</button>
                                    </form>
                                    <a style="margin-top: 20px;" href="{{route('post.index', $post->slug)}}" class="btn btn-primary btn-group-justified">Show post</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else 
                    <div class="dashboard-div">
                        <h3>There are no posts at the moment.</h3>
                    </div>
                @endif
        @else 
            @if(count($auth_user->posts) > 0)
                @foreach ($auth_user->posts as $post)
                    <div class="col-xs-12 col-md-3">
                        <div class="color-block-wrapper" style="padding-bottomfff: 1rem;">
                            <div class="color-block color-block-lblue">
                                <span style="font-size: 1.7rem; text-align: center;">#{{ $post->id }}</span>
                                <br>
                                <b class="post-title-2 text-capitalize" style="font-size: 2rem;">
                                    {{ Str::limit($post->title, 10) }}
                                </b>
                                <div class="color-block-text">
                                    <p class="post-text-2" style="font-size: 10px;">
                                        {{ Str::limit($post->short_description, 30) }}
                                    </p>
                                </div>
                                <a href="{{route('post.index', $post->slug)}}">
                                    <img class="post-image-2" style="height: 150px; max-width: 200px;"
                                        
                                    @if ($post->picture == '/storage/images/no-picture')

                                        src="{{$post->random}}" 

                                    @else 

                                        src="{{$post->picture}}" 

                                    @endif

                                    alt="{{$post->title}}"
                                    title="{{$post->title}}">
                                </a>                        
                                <p class="post-date" style="color: #fff; margin-top: 10px; font-size: 12px; text-align: center;">Posted: {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</p>
                                <p class="post-date" style="color: #fff; margin-top: 10px; font-size: 12px; text-align: center;">Likes: {{ $post->likes->count() }}</p>
                            </div>
                            <div style="margin: 20px;" class="text-center">
                                @if ($post->user_id == auth()->user()->id)
                                    <a href="{{route('post.edit', $post->id)}}" class="btn btn-success btn-group">Edit post</a>
                                @endif
                                @if ($post->user_id == auth()->user()->id)
                                    <form action="{{ route('post.delete', $post->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-group" onclick="confirm('Do you really want to delete this post?')">Delete post</button>
                                    </form>
                                @endif
                                <a style="margin-top: 20px;" href="{{route('post.index', $post->slug)}}" class="btn btn-primary btn-group-justified">Show post</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="dashboard-div">
                    <h3>There's no any posts at the moment...</h3>
                </div>
            @endif
            </div> 
        @endif
    @endif    
@endsection

@section('pagination')

    <div class="row">
        <center>{{$posts->links('pagination::bootstrap-5')}}</center>
    </div> 
    
@endsection