@extends('layouts.default')

@section('content')

<h1>{{ $post->title }}</h1>

<p class="lead article-meta">
    <i class="fa fa-user"></i> by <a href="{{ route('users.show', $post->user->id) }}">{{ $post->user->username }}</a>
    <span style="padding:0 6px">•</span>
    @if ( $currentUser && ($currentUser->can("manage_contents") || $currentUser->id == $post->user_id) )
        <a href="{{ route('posts.edit', $post->id) }}"><i class="fa fa-pencil-square-o"></i> edit</a>
        <span style="padding:0 6px">•</span>
        <a href="{{ route('posts.destroy', $post->id) }}" data-method="delete"><i class="fa fa-trash"></i> delete</a>
    @endif
</p>

<p class="article-meta">
    <i class="fa fa-calendar"></i> {{ $post->created_at }} <span style="padding:0 6px">•</span>
    <i class="fa fa-book"></i> <a href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a> <span style="padding:0 6px">•</span>
    <i class="fa fa-tags"></i>

    @forelse ($post->tags as $tag)
        <span class="badge badge-info">{{ $tag->name }}</span>
    @empty
        N/A
    @endforelse

</p>

<hr>

<div class="article-body">
    {{ $post->body }}
</div>

@stop
