@extends('layouts.default')

@section('content')

    @if (isset($category))
        <h3 style="margin-left: 10px; line-height: 1.5;"><i class="fa fa-book">
            </i> Category: <span class="label label-default">{{ $category->name }}</span>
        </h3>

    @endif

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
