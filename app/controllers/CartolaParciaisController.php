<?php

class CartolaParciaisController extends BaseController {

	public function index()
	{
		$search = file_get_contents('http://api.cartola.globo.com/time/busca.jsonp?nome=cricklade');
		$search = str_replace('busca(', '', $search);
		$search = str_replace(');', '', $search);
		$search = json_decode($search);
		$search = file_get_contents('http://api.cartola.globo.com/time_adv/' . $search->times[0]->slug . '.jsonp');
		$search = str_replace('time_adv(', '', $search);
		$search = str_replace(');', '', $search);
		$search = json_decode($search);
		$team_info = array(
			'crest'		=> $search->time->imagens_escudo->img_escudo_32x32,
			'name'		=> $search->time->nome,
			'manager'	=> $search->time->nome_cartola,
			'points'	=> $search->time->pontuacao,
			'budget'	=> $search->time->patrimonio,
			'players'	=> array()
		);
		
		foreach ($search->atleta as $atleta) {
			$team_info['players'][] = (object) array(
				'name'		=> $atleta->apelido,
				'position'	=> $atleta->posicao->abreviacao,
				'points'	=> $atleta->pontos ? number_format((double) $atleta->pontos, 2) : '---'
			);
		}
		
		return View::make('cartola.parciais')->with('team_info', (object) $team_info);
	}

}