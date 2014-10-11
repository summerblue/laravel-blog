@extends('layouts.default')

@section('content')

<h1>{{ $post->title }}</h1>

<p class="lead article-meta">
    <i class="fa fa-user"></i> by <a href="{{ route('users.show', $post->user->id) }}">{{ $post->user->username }}</a>
    <span style="padding:0 6px">•</span>
    @if ( $currentUser && ($currentUser->can("manage_contents") || $currentUser->id == $post->user_id) )
        <i class="fa fa-pencil-square-o"></i> <a href="{{ route('posts.edit', $post->id) }}">edit</a>
        <span style="padding:0 6px">•</span>
        <i class="fa fa-trash"></i> <a href="{{ route('posts.destroy', $post->id) }}" data-method="delete">delete</a>
    @endif
</p>

<p class="article-meta">
    <i class="fa fa-calendar"></i> {{ $post->created_at }} <span style="padding:0 6px">•</span>
    <i class="fa fa-book"></i> <a href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a> <span style="padding:0 6px">•</span>
    <i class="fa fa-tags"></i>
    @forelse ($post->tags as $tag)
        <a href="{{ route('tags.show', $tag->normalized) }}"><span class="badge badge-info">{{ $tag->name }}</span></a>
    @empty
        N/A
    @endforelse

</p>

<hr>

<div class="article-body">
    {{ $post->body }}
</div>

@stop
