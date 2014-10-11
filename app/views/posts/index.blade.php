@extends('layouts.default')

@section('content')

    @if (isset($category))
        <h3 class="filter-header">
            <i class="fa fa-book"></i> Category: <span class="label label-default">{{ $category->name }}</span>
        </h3>
    @endif

    @if (isset($tag))
        <h3 class="filter-header">
        <i class="fa fa-tags"></i> Tag: <span class="label label-default">{{ $tag->name }}</span>
        </h3>
    @endif

    <div class="list-group">

    @forelse ($posts as $post)
        <a href="{{ route('posts.show', $post->id) }}" class="list-group-item">
            <h4 class="list-group-item-heading">{{ $post->title }}</h4>
            <div class="meta">
                <i class="fa fa-calendar"></i> <span class="timeago">{{ $post->created_at }}</span>
                •  <i class="fa fa-user"></i> {{ $post->user->username }}
                •  <i class="fa fa-book"></i> {{ $post->category->name }}
                •  <i class="fa fa-tags"></i>
                @forelse ($post->tags as $tag)
                    <span class="label label-default">{{ $tag->name }}</span>
                @empty
                    N/A
                @endforelse
            </div>
        </a>
    @empty
        There are nothing here!
    @endforelse

    </div>

    {{ $posts->links(); }}

@stop
