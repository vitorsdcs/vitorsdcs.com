@extends('templates.default')

@section('title')Contato @stop

@section('content')


	<article>
		<h2>Contato</h2>

		{{ Form:: open(array('url' => 'contact_request')) }}

			@foreach ($errors->all(':message') as $message)
				{{ $message }}
			@endforeach 
			
			<br />
			<div>{{ Form::label('name', 'Nome' ) }}</div>
			<div>{{ Form::text('name', '' ) }}</div>
			<br />
			<div>{{ Form::label('email', 'E-mail') }}</div>
			<div>{{ Form::email('email', '') }}</div>
			<br />
			<div>{{ Form::label('subject', 'Assunto') }}</div>
			<div>{{ Form::text('subject', '' ) }}</div>
			<br />
			<div>{{ Form::label('message', 'Mensagem' ) }}</div>
			<div>{{ Form::textarea('message', '') }}</div>
			<br />
			<div>{{ Form::submit('Send', array('class' => 'you css class for button')) }}</div>

		{{ Form:: close() }}
	</article>

@stop