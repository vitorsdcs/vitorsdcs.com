@extends('templates.default')

@section('title')Scripts TCC @stop

@section('content')


	<article>
		<h2>Scripts TCC</h2>

		{{ Form:: open(array('url' => 'scripts-tcc')) }}
			
			<br />
			<div>{{ Form::label('size', 'Tamanho do banco') }}</div>
			<div>{{ Form::select('size', array(
								/*'0' => '0',*/
								'Complexos/complexos' => '1',
								/*'Complexos/empty' => '0',*/
								/*'Complexos/logunidoper - 0 embbeded' => '15000 - 0 JOIN',
								'Complexos/logunidoper - 1 embbeded' => '15000 - 1 JOIN',
								'Complexos/logunidoper - 2 embbeded' => '15000 - 2 JOIN',
								'Complexos/logunidoper - 3 embbeded' => '15000 - 3 JOIN',
								'Complexos/logunidoper - 4 embbeded' => '15000 - 4 JOIN',*/
								/*'Simples/1 - Preenchimento do banco - 10 registros' => '10',
								'Simples/2 - Preenchimento do banco - 100 registros' => '100',
								'Simples/3 - Preenchimento do banco - 1000 registros' => '1000',
								'Simples/4 - Preenchimento do banco - 10000 registros' => '10000',
								'Simples/5 - Preenchimento do banco - 100000 registros' => '100000',
								'Simples/6 - Preenchimento do banco - 200000 registros' => '200000',
								'Simples/7 - Preenchimento do banco - 400000 registros' => '400000',*/
			)) }}</div>
			<br />
			<div>{{ Form::label('op', 'Tipo de operação') }}</div>
			<div>{{ Form::select('op', array(
								/*'MySQL/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 10' => 'MySQL - Grafico A1 - SELECT - Simples - 10',
								'MySQL/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 100' => 'MySQL - Grafico A1 - SELECT - Simples - 100',
								'MySQL/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 1000' => 'MySQL - Grafico A1 - SELECT - Simples - 1000',
								'MySQL/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 10000' => 'MySQL - Grafico A1 - SELECT - Simples - 10000',
								'MySQL/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 100000' => 'MySQL - Grafico A1 - SELECT - Simples - 100000',
								'MySQL/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 400000' => 'MySQL - Grafico A1 - SELECT - Simples - 400000',
								
								'MySQL/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 10' => 'MySQL - Grafico B1 - INSERT - Simples - 10',
								'MySQL/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 100' => 'MySQL - Grafico B1 - INSERT - Simples - 100',
								'MySQL/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 1000' => 'MySQL - Grafico B1 - INSERT - Simples - 1000',
								'MySQL/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 10000' => 'MySQL - Grafico B1 - INSERT - Simples - 10000',
								'MySQL/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 100000' => 'MySQL - Grafico B1 - INSERT - Simples - 100000',
								'MySQL/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 400000' => 'MySQL - Grafico B1 - INSERT - Simples - 400000',
								
								'MySQL/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 10' => 'MySQL - Grafico C1 - UPDATE - Simples - 10',
								'MySQL/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 100' => 'MySQL - Grafico C1 - UPDATE - Simples - 100',
								'MySQL/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 1000' => 'MySQL - Grafico C1 - UPDATE - Simples - 1000',
								'MySQL/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 10000' => 'MySQL - Grafico C1 - UPDATE - Simples - 10000',
								'MySQL/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 100000' => 'MySQL - Grafico C1 - UPDATE - Simples - 100000',
								'MySQL/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 400000' => 'MySQL - Grafico C1 - UPDATE - Simples - 400000',
								
								'MySQL/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 10' => 'MySQL - Grafico D1 - DELETE - Simples - 10',
								'MySQL/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 100' => 'MySQL - Grafico D1 - DELETE - Simples - 100',
								'MySQL/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 1000' => 'MySQL - Grafico D1 - DELETE - Simples - 1000',
								'MySQL/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 10000' => 'MySQL - Grafico D1 - DELETE - Simples - 10000',
								'MySQL/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 100000' => 'MySQL - Grafico D1 - DELETE - Simples - 100000',
								'MySQL/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 400000' => 'MySQL - Grafico D1 - DELETE - Simples - 400000',*/
								
								/*'MongoDB/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 10' => 'MongoDB - Grafico A1 - SELECT - Simples - 10',
								'MongoDB/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 100' => 'MongoDB - Grafico A1 - SELECT - Simples - 100',
								'MongoDB/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 1000' => 'MongoDB - Grafico A1 - SELECT - Simples - 1000',
								'MongoDB/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 10000' => 'MongoDB - Grafico A1 - SELECT - Simples - 10000',
								'MongoDB/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 100000' => 'MongoDB - Grafico A1 - SELECT - Simples - 100000',
								'MongoDB/Simples/Grafico A1/Grafico A1 - SELECT - Simples - 400000' => 'MongoDB - Grafico A1 - SELECT - Simples - 400000',
								
								'MongoDB/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 10' => 'MongoDB - Grafico B1 - INSERT - Simples - 10',
								'MongoDB/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 100' => 'MongoDB - Grafico B1 - INSERT - Simples - 100',
								'MongoDB/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 1000' => 'MongoDB - Grafico B1 - INSERT - Simples - 1000',
								'MongoDB/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 10000' => 'MongoDB - Grafico B1 - INSERT - Simples - 10000',
								'MongoDB/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 100000' => 'MongoDB - Grafico B1 - INSERT - Simples - 100000',
								'MongoDB/Simples/Grafico B1/Grafico B1 - INSERT - Simples - 400000' => 'MongoDB - Grafico B1 - INSERT - Simples - 400000',
								
								'MongoDB/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 10' => 'MongoDB - Grafico C1 - UPDATE - Simples - 10',
								'MongoDB/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 100' => 'MongoDB - Grafico C1 - UPDATE - Simples - 100',
								'MongoDB/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 1000' => 'MongoDB - Grafico C1 - UPDATE - Simples - 1000',
								'MongoDB/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 10000' => 'MongoDB - Grafico C1 - UPDATE - Simples - 10000',
								'MongoDB/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 100000' => 'MongoDB - Grafico C1 - UPDATE - Simples - 100000',
								'MongoDB/Simples/Grafico C1/Grafico C1 - UPDATE - Simples - 400000' => 'MongoDB - Grafico C1 - UPDATE - Simples - 400000',
								
								'MongoDB/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 10' => 'MongoDB - Grafico D1 - DELETE - Simples - 10',
								'MongoDB/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 100' => 'MongoDB - Grafico D1 - DELETE - Simples - 100',
								'MongoDB/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 1000' => 'MongoDB - Grafico D1 - DELETE - Simples - 1000',
								'MongoDB/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 10000' => 'MongoDB - Grafico D1 - DELETE - Simples - 10000',
								'MongoDB/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 100000' => 'MongoDB - Grafico D1 - DELETE - Simples - 100000',
								'MongoDB/Simples/Grafico D1/Grafico D1 - DELETE - Simples - 400000' => 'MongoDB - Grafico D1 - DELETE - Simples - 400000',*/
								
								
								
								/*'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 10' => 'MySQL - Grafico A2 - SELECT - Complexo - 0 JOIN - 10',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 100' => 'MySQL - Grafico A2 - SELECT - Complexo - 0 JOIN - 100',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 1000' => 'MySQL - Grafico A2 - SELECT - Complexo - 0 JOIN - 1000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 5000' => 'MySQL - Grafico A2 - SELECT - Complexo - 0 JOIN - 5000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 10000' => 'MySQL - Grafico A2 - SELECT - Complexo - 0 JOIN - 10000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 15000' => 'MySQL - Grafico A2 - SELECT - Complexo - 0 JOIN - 15000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 1 JOIN - 10' => 'MySQL - Grafico A2 - SELECT - Complexo - 1 JOIN - 10',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 1 JOIN - 100' => 'MySQL - Grafico A2 - SELECT - Complexo - 1 JOIN - 100',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 1 JOIN - 1000' => 'MySQL - Grafico A2 - SELECT - Complexo - 1 JOIN - 1000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 1 JOIN - 5000' => 'MySQL - Grafico A2 - SELECT - Complexo - 1 JOIN - 5000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 1 JOIN - 10000' => 'MySQL - Grafico A2 - SELECT - Complexo - 1 JOIN - 10000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 1 JOIN - 15000' => 'MySQL - Grafico A2 - SELECT - Complexo - 1 JOIN - 15000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 2 JOIN - 10' => 'MySQL - Grafico A2 - SELECT - Complexo - 2 JOIN - 10',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 2 JOIN - 100' => 'MySQL - Grafico A2 - SELECT - Complexo - 2 JOIN - 100',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 2 JOIN - 1000' => 'MySQL - Grafico A2 - SELECT - Complexo - 2 JOIN - 1000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 2 JOIN - 5000' => 'MySQL - Grafico A2 - SELECT - Complexo - 2 JOIN - 5000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 2 JOIN - 10000' => 'MySQL - Grafico A2 - SELECT - Complexo - 2 JOIN - 10000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 2 JOIN - 15000' => 'MySQL - Grafico A2 - SELECT - Complexo - 2 JOIN - 15000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 3 JOIN - 10' => 'MySQL - Grafico A2 - SELECT - Complexo - 3 JOIN - 10',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 3 JOIN - 100' => 'MySQL - Grafico A2 - SELECT - Complexo - 3 JOIN - 100',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 3 JOIN - 1000' => 'MySQL - Grafico A2 - SELECT - Complexo - 3 JOIN - 1000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 3 JOIN - 5000' => 'MySQL - Grafico A2 - SELECT - Complexo - 3 JOIN - 5000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 3 JOIN - 10000' => 'MySQL - Grafico A2 - SELECT - Complexo - 3 JOIN - 10000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 3 JOIN - 15000' => 'MySQL - Grafico A2 - SELECT - Complexo - 3 JOIN - 15000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 4 JOIN - 10' => 'MySQL - Grafico A2 - SELECT - Complexo - 4 JOIN - 10',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 4 JOIN - 100' => 'MySQL - Grafico A2 - SELECT - Complexo - 4 JOIN - 100',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 4 JOIN - 1000' => 'MySQL - Grafico A2 - SELECT - Complexo - 4 JOIN - 1000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 4 JOIN - 5000' => 'MySQL - Grafico A2 - SELECT - Complexo - 4 JOIN - 5000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 4 JOIN - 10000' => 'MySQL - Grafico A2 - SELECT - Complexo - 4 JOIN - 10000',
								'MySQL/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 4 JOIN - 15000' => 'MySQL - Grafico A2 - SELECT - Complexo - 4 JOIN - 15000',*/
								
								/*'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 JOIN - 10' => 'MySQL - Grafico B2 - INSERT - Complexo - 0 JOIN - 10',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 JOIN - 100' => 'MySQL - Grafico B2 - INSERT - Complexo - 0 JOIN - 100',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 JOIN - 1000' => 'MySQL - Grafico B2 - INSERT - Complexo - 0 JOIN - 1000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 JOIN - 5000' => 'MySQL - Grafico B2 - INSERT - Complexo - 0 JOIN - 5000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 JOIN - 10000' => 'MySQL - Grafico B2 - INSERT - Complexo - 0 JOIN - 10000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 JOIN - 15000' => 'MySQL - Grafico B2 - INSERT - Complexo - 0 JOIN - 15000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 JOIN - 10' => 'MySQL - Grafico B2 - INSERT - Complexo - 1 JOIN - 10',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 JOIN - 100' => 'MySQL - Grafico B2 - INSERT - Complexo - 1 JOIN - 100',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 JOIN - 1000' => 'MySQL - Grafico B2 - INSERT - Complexo - 1 JOIN - 1000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 JOIN - 5000' => 'MySQL - Grafico B2 - INSERT - Complexo - 1 JOIN - 5000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 JOIN - 10000' => 'MySQL - Grafico B2 - INSERT - Complexo - 1 JOIN - 10000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 JOIN - 15000' => 'MySQL - Grafico B2 - INSERT - Complexo - 1 JOIN - 15000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 JOIN - 10' => 'MySQL - Grafico B2 - INSERT - Complexo - 2 JOIN - 10',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 JOIN - 100' => 'MySQL - Grafico B2 - INSERT - Complexo - 2 JOIN - 100',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 JOIN - 1000' => 'MySQL - Grafico B2 - INSERT - Complexo - 2 JOIN - 1000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 JOIN - 5000' => 'MySQL - Grafico B2 - INSERT - Complexo - 2 JOIN - 5000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 JOIN - 10000' => 'MySQL - Grafico B2 - INSERT - Complexo - 2 JOIN - 10000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 JOIN - 15000' => 'MySQL - Grafico B2 - INSERT - Complexo - 2 JOIN - 15000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 JOIN - 10' => 'MySQL - Grafico B2 - INSERT - Complexo - 3 JOIN - 10',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 JOIN - 100' => 'MySQL - Grafico B2 - INSERT - Complexo - 3 JOIN - 100',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 JOIN - 1000' => 'MySQL - Grafico B2 - INSERT - Complexo - 3 JOIN - 1000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 JOIN - 5000' => 'MySQL - Grafico B2 - INSERT - Complexo - 3 JOIN - 5000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 JOIN - 10000' => 'MySQL - Grafico B2 - INSERT - Complexo - 3 JOIN - 10000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 JOIN - 15000' => 'MySQL - Grafico B2 - INSERT - Complexo - 3 JOIN - 15000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 JOIN - 10' => 'MySQL - Grafico B2 - INSERT - Complexo - 4 JOIN - 10',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 JOIN - 100' => 'MySQL - Grafico B2 - INSERT - Complexo - 4 JOIN - 100',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 JOIN - 1000' => 'MySQL - Grafico B2 - INSERT - Complexo - 4 JOIN - 1000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 JOIN - 5000' => 'MySQL - Grafico B2 - INSERT - Complexo - 4 JOIN - 5000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 JOIN - 10000' => 'MySQL - Grafico B2 - INSERT - Complexo - 4 JOIN - 10000',
								'MySQL/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 JOIN - 15000' => 'MySQL - Grafico B2 - INSERT - Complexo - 4 JOIN - 15000',*/
								
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 JOIN - 10' => 'MySQL - Grafico C2 - UPDATE - Complexo - 0 JOIN - 10',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 JOIN - 100' => 'MySQL - Grafico C2 - UPDATE - Complexo - 0 JOIN - 100',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 JOIN - 1000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 0 JOIN - 1000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 JOIN - 5000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 0 JOIN - 5000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 JOIN - 10000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 0 JOIN - 10000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 JOIN - 15000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 0 JOIN - 15000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 JOIN - 10' => 'MySQL - Grafico C2 - UPDATE - Complexo - 1 JOIN - 10',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 JOIN - 100' => 'MySQL - Grafico C2 - UPDATE - Complexo - 1 JOIN - 100',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 JOIN - 1000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 1 JOIN - 1000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 JOIN - 5000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 1 JOIN - 5000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 JOIN - 10000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 1 JOIN - 10000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 JOIN - 15000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 1 JOIN - 15000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 JOIN - 10' => 'MySQL - Grafico C2 - UPDATE - Complexo - 2 JOIN - 10',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 JOIN - 100' => 'MySQL - Grafico C2 - UPDATE - Complexo - 2 JOIN - 100',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 JOIN - 1000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 2 JOIN - 1000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 JOIN - 5000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 2 JOIN - 5000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 JOIN - 10000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 2 JOIN - 10000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 JOIN - 15000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 2 JOIN - 15000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 JOIN - 10' => 'MySQL - Grafico C2 - UPDATE - Complexo - 3 JOIN - 10',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 JOIN - 100' => 'MySQL - Grafico C2 - UPDATE - Complexo - 3 JOIN - 100',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 JOIN - 1000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 3 JOIN - 1000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 JOIN - 5000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 3 JOIN - 5000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 JOIN - 10000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 3 JOIN - 10000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 JOIN - 15000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 3 JOIN - 15000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 JOIN - 10' => 'MySQL - Grafico C2 - UPDATE - Complexo - 4 JOIN - 10',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 JOIN - 100' => 'MySQL - Grafico C2 - UPDATE - Complexo - 4 JOIN - 100',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 JOIN - 1000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 4 JOIN - 1000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 JOIN - 5000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 4 JOIN - 5000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 JOIN - 10000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 4 JOIN - 10000',
								'MySQL/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 JOIN - 15000' => 'MySQL - Grafico C2 - UPDATE - Complexo - 4 JOIN - 15000',
								
								/*'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 10' => 'MySQL - Grafico D2 - DELETE - Complexo - 0 JOIN - 10',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 100' => 'MySQL - Grafico D2 - DELETE - Complexo - 0 JOIN - 100',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 1000' => 'MySQL - Grafico D2 - DELETE - Complexo - 0 JOIN - 1000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 5000' => 'MySQL - Grafico D2 - DELETE - Complexo - 0 JOIN - 5000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 10000' => 'MySQL - Grafico D2 - DELETE - Complexo - 0 JOIN - 10000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 15000' => 'MySQL - Grafico D2 - DELETE - Complexo - 0 JOIN - 15000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 1 JOIN - 10' => 'MySQL - Grafico D2 - DELETE - Complexo - 1 JOIN - 10',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 1 JOIN - 100' => 'MySQL - Grafico D2 - DELETE - Complexo - 1 JOIN - 100',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 1 JOIN - 1000' => 'MySQL - Grafico D2 - DELETE - Complexo - 1 JOIN - 1000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 1 JOIN - 5000' => 'MySQL - Grafico D2 - DELETE - Complexo - 1 JOIN - 5000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 1 JOIN - 10000' => 'MySQL - Grafico D2 - DELETE - Complexo - 1 JOIN - 10000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 1 JOIN - 15000' => 'MySQL - Grafico D2 - DELETE - Complexo - 1 JOIN - 15000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 2 JOIN - 10' => 'MySQL - Grafico D2 - DELETE - Complexo - 2 JOIN - 10',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 2 JOIN - 100' => 'MySQL - Grafico D2 - DELETE - Complexo - 2 JOIN - 100',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 2 JOIN - 1000' => 'MySQL - Grafico D2 - DELETE - Complexo - 2 JOIN - 1000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 2 JOIN - 5000' => 'MySQL - Grafico D2 - DELETE - Complexo - 2 JOIN - 5000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 2 JOIN - 10000' => 'MySQL - Grafico D2 - DELETE - Complexo - 2 JOIN - 10000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 2 JOIN - 15000' => 'MySQL - Grafico D2 - DELETE - Complexo - 2 JOIN - 15000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 3 JOIN - 10' => 'MySQL - Grafico D2 - DELETE - Complexo - 3 JOIN - 10',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 3 JOIN - 100' => 'MySQL - Grafico D2 - DELETE - Complexo - 3 JOIN - 100',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 3 JOIN - 1000' => 'MySQL - Grafico D2 - DELETE - Complexo - 3 JOIN - 1000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 3 JOIN - 5000' => 'MySQL - Grafico D2 - DELETE - Complexo - 3 JOIN - 5000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 3 JOIN - 10000' => 'MySQL - Grafico D2 - DELETE - Complexo - 3 JOIN - 10000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 3 JOIN - 15000' => 'MySQL - Grafico D2 - DELETE - Complexo - 3 JOIN - 15000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 4 JOIN - 10' => 'MySQL - Grafico D2 - DELETE - Complexo - 4 JOIN - 10',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 4 JOIN - 100' => 'MySQL - Grafico D2 - DELETE - Complexo - 4 JOIN - 100',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 4 JOIN - 1000' => 'MySQL - Grafico D2 - DELETE - Complexo - 4 JOIN - 1000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 4 JOIN - 5000' => 'MySQL - Grafico D2 - DELETE - Complexo - 4 JOIN - 5000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 4 JOIN - 10000' => 'MySQL - Grafico D2 - DELETE - Complexo - 4 JOIN - 10000',
								'MySQL/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 4 JOIN - 15000' => 'MySQL - Grafico D2 - DELETE - Complexo - 4 JOIN - 15000',*/
								
								/*'MongoDB/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 10' => 'MongoDB - Grafico A2 - SELECT - Complexo - 0 JOIN - 10',
								'MongoDB/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 100' => 'MongoDB - Grafico A2 - SELECT - Complexo - 0 JOIN - 100',
								'MongoDB/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 1000' => 'MongoDB - Grafico A2 - SELECT - Complexo - 0 JOIN - 1000',
								'MongoDB/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 5000' => 'MongoDB - Grafico A2 - SELECT - Complexo - 0 JOIN - 5000',
								'MongoDB/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 10000' => 'MongoDB - Grafico A2 - SELECT - Complexo - 0 JOIN - 10000',
								'MongoDB/Complexos/Grafico A2/Grafico A2 - SELECT - Complexo - 0 JOIN - 15000' => 'MongoDB - Grafico A2 - SELECT - Complexo - 0 JOIN - 15000',*/
								
								/*'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 embbeded - 10 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 0 embbeded - 10 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 embbeded - 100 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 0 embbeded - 100 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 embbeded - 1000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 0 embbeded - 1000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 embbeded - 5000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 0 embbeded - 5000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 embbeded - 10000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 0 embbeded - 10000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 0 embbeded - 15000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 0 embbeded - 15000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 embbeded - 10 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 1 embbeded - 10 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 embbeded - 100 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 1 embbeded - 100 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 embbeded - 1000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 1 embbeded - 1000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 embbeded - 5000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 1 embbeded - 5000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 embbeded - 10000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 1 embbeded - 10000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 1 embbeded - 15000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 1 embbeded - 15000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 embbeded - 10 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 2 embbeded - 10 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 embbeded - 100 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 2 embbeded - 100 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 embbeded - 1000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 2 embbeded - 1000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 embbeded - 5000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 2 embbeded - 5000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 embbeded - 10000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 2 embbeded - 10000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 2 embbeded - 15000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 2 embbeded - 15000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 embbeded - 10 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 3 embbeded - 10 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 embbeded - 100 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 3 embbeded - 100 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 embbeded - 1000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 3 embbeded - 1000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 embbeded - 5000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 3 embbeded - 5000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 embbeded - 10000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 3 embbeded - 10000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 3 embbeded - 15000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 3 embbeded - 15000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 embbeded - 10 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 4 embbeded - 10 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 embbeded - 100 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 4 embbeded - 100 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 embbeded - 1000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 4 embbeded - 1000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 embbeded - 5000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 4 embbeded - 5000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 embbeded - 10000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 4 embbeded - 10000 inserts',
								'MongoDB/Complexos/Grafico B2/Grafico B2 - INSERT - Complexo - 4 embbeded - 15000 inserts' => 'MongoDB - Grafico B2 - INSERT - Complexo - 4 embbeded - 15000 inserts',*/
								
								/*'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 embbeded - 10' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 0 embbeded - 10',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 embbeded - 100' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 0 embbeded - 100',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 embbeded - 1000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 0 embbeded - 1000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 embbeded - 5000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 0 embbeded - 5000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 embbeded - 10000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 0 embbeded - 10000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 0 embbeded - 15000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 0 embbeded - 15000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 embbeded - 10' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 1 embbeded - 10',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 embbeded - 100' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 1 embbeded - 100',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 embbeded - 1000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 1 embbeded - 1000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 embbeded - 5000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 1 embbeded - 5000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 embbeded - 10000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 1 embbeded - 10000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 1 embbeded - 15000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 1 embbeded - 15000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 embbeded - 10' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 2 embbeded - 10',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 embbeded - 100' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 2 embbeded - 100',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 embbeded - 1000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 2 embbeded - 1000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 embbeded - 5000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 2 embbeded - 5000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 embbeded - 10000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 2 embbeded - 10000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 2 embbeded - 15000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 2 embbeded - 15000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 embbeded - 10' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 3 embbeded - 10',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 embbeded - 100' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 3 embbeded - 100',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 embbeded - 1000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 3 embbeded - 1000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 embbeded - 5000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 3 embbeded - 5000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 embbeded - 10000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 3 embbeded - 10000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 3 embbeded - 15000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 3 embbeded - 15000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 embbeded - 10' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 4 embbeded - 10',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 embbeded - 100' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 4 embbeded - 100',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 embbeded - 1000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 4 embbeded - 1000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 embbeded - 5000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 4 embbeded - 5000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 embbeded - 10000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 4 embbeded - 10000',
								'MongoDB/Complexos/Grafico C2/Grafico C2 - UPDATE - Complexo - 4 embbeded - 15000' => 'MongoDB - Grafico C2 - UPDATE - Complexo - 4 embbeded - 15000',*/
								
								/*'MongoDB/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 10' => 'MongoDB - Grafico D2 - DELETE - Complexo - 0 JOIN - 10',
								'MongoDB/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 100' => 'MongoDB - Grafico D2 - DELETE - Complexo - 0 JOIN - 100',
								'MongoDB/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 1000' => 'MongoDB - Grafico D2 - DELETE - Complexo - 0 JOIN - 1000',
								'MongoDB/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 5000' => 'MongoDB - Grafico D2 - DELETE - Complexo - 0 JOIN - 5000',
								'MongoDB/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 10000' => 'MongoDB - Grafico D2 - DELETE - Complexo - 0 JOIN - 10000',
								'MongoDB/Complexos/Grafico D2/Grafico D2 - DELETE - Complexo - 0 JOIN - 15000' => 'MongoDB - Grafico D2 - DELETE - Complexo - 0 JOIN - 15000',*/
							)); }}</div>
			<br />
			@if (isset($exec_time))
				Tempo de execução: {{ $exec_time }}
			@endif 
			<div>{{ Form::submit('Executar') }}</div>

		{{ Form:: close() }}
	</article>

@stop
