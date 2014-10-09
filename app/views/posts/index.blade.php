@extends('layouts.default')

@section('content')

    <div class="list-group">

    @forelse ($posts as $post)
        <a href="{{ route('posts.show', $post->id) }}" class="list-group-item">
            <h4 class="list-group-item-heading">{{ $post->title }}</h4>
            <div class="meta">
            <i class="fa fa-clock-o"></i> <span>{{ $post->created_at }}</span>
            •  <i class="fa fa-user"></i> {{ $post->user->username }}
            •  <i class="fa fa-book"></i> {{ $post->category->name }}
            </div>
        </a>
    @empty
        There are nothing here!
    @endforelse


    </div>

    {{ $posts->links(); }}

@stop
