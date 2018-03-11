@extends('templates.default')

@section('title')Blog @stop

@section('content')
	
	@if ($posts->count())
		@foreach ($posts as $post)
			<article class="teaser">
				<p><i class="fa fa-calendar-o"></i> {{ $post->created_at->formatLocalized('%d/%m/%Y %Hh%m') }}</p>
				<h2><a href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }}</a></h2>
				<a href="{{ URL::action('post-show', $post->slug) }}">{{ HTML::image($post->image) }}</a>
				{{ Markdown::parse(Str::limit($post->body, 600)) }}
				<a href="{{ URL::action('post-show', $post->slug) }}">Continuar lendo &rarr;</a>
			</article>
		@endforeach
	@endif
@stop