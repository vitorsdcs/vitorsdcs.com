@extends('templates.default')

@section('title'){{ $post->title }} @stop

@section('content')
	<article>
		<h2>{{ $post->title }}</h2>
		<p>Published {{ $post->created_at->diffForHumans() }}</p>
		{{ Markdown::parse($post->body) }}
	</article>
@stop