@extends('layouts.default')

@section('content')

<h1>{{ $post->title }}</h1>

<p class="lead article-meta">
    <i class="fa fa-user"></i> by <a href="{{ route('users.show', $post->user->id) }}">{{ $post->user->username }}</a>
</p>

<p class="article-meta">
    <i class="fa fa-calendar"></i> {{ $post->created_at }} <span style="padding:0 6px">•</span>
    <i class="fa fa-book"></i> {{ $post->category->name }} <span style="padding:0 6px">•</span>
    <i class="fa fa-tags"></i> <a href=""><span class="badge badge-info">Bootstrap</span></a> <a href=""><span class="badge badge-info">Web</span></a> <a href=""><span class="badge badge-info">CSS</span></a> <a href=""><span class="badge badge-info">HTML</span></a>
</p>

<hr>

<div class="article-body">
    {{ $post->body }}
</div>

@stop
