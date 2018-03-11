@extends('templates.default')

@section('title'){{ $post->title }} @stop

@section('content')
	<article>
		<p><i class="fa fa-calendar-o"></i> {{ $post->created_at->formatLocalized('%d/%m/%Y %Hh%m') }}</p>
		<h2>{{ $post->title }}</h2>
		{{ HTML::image($post->image) }}
		{{ Markdown::parse($post->body) }}
	</article>
@stop