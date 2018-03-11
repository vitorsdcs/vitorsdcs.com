@extends('templates.default')

@section('title')CartolaFC Parciais @stop

@section('content')
	
	<!--<div id="team-search">
		<label>Nome do time:</label> <input type="text" />
		<select></select>
		<input type="submit" value="Buscar" />
	</div>-->
	<div id="team">
		<div id="crest">{{ HTML::image($team_info->crest) }}</div>
		<h2 id="name">{{ $team_info->name }}</h2>
		<div id="manager">{{ $team_info->manager }}</div>
		<div id="status">
			<div id="points">
				<label>Pontuação parcial</label>
				<h3>{{ $team_info->points }}</h3>
			</div>
			<div id="budget">
				<label>Patrimônio</label>
				<h3>{{ $team_info->budget }}</h3>
			</div>
		</div>
		
		<table id="players">
			@foreach ($team_info->players as $player)
				<tr>
					<td class="position">{{ $player->position }}</td>
					<td class="name">{{ $player->name }}</td>
					<td class="points {{ $player->points > 0 ? 'positive' : 'negative' }}">{{ $player->points }}</td>
				</tr>
			@endforeach
		</table>
	</div>
@stop