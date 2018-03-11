<?php

class ScriptController extends BaseController {

	public function index() {
		return View::make('script');
	}
	
	public function results() {
		$data = Input::all();
		$size = $data['size'];
		$op = $data['op'];
		
		$exec_time = array();
		
		for ($i = 0; $i < 2; $i++)  {
			$db = strpos($op, 'MySQL') !== FALSE ? 'mysql' : 'mongodb';
			switch ($db) {
				case 'mysql':
					$link = mysqli_connect('localhost', 'root', 'cwMEyhuTlS', 'cep.gpbe.17.01.2014');
					
					if ($size !== 0) {
						$file = '/var/www/html/vitorsdcs.com/public/tcc/scripts/MySQL/' . $size . '.sql';
						print file_exists($file);
						if (file_exists($file)) {
							exec('mysql -uroot -pcwMEyhuTlS cep.gpbe.17.01.2014 < "' . $file . '"');
						}
					}
					
					mysqli_close($link);
					
					$file = '/var/www/html/vitorsdcs.com/public/tcc/scripts/' . $op . '.sql';
					print file_exists($file);
					$start = microtime(TRUE);
					exec('mysql -uroot -pcwMEyhuTlS cep.gpbe.17.01.2014 < "' . $file . '"');
					$finish = microtime(TRUE);
					$exec_time[$i] = ($finish - $start);
					break;
				case 'mongodb':
					$mongo = new MongoClient();
					$db = $mongo->test;
					$db->drop();
					
					if ($size !== 0) {
						$file = '/var/www/html/vitorsdcs.com/public/tcc/scripts/MongoDB/' . $size . '.js';
						print file_exists($file);
						if (file_exists($file)) {
							exec('mongo < "' . $file . '"');
						}
					}
					
					$mongo->close();
					
					$file = '/var/www/html/vitorsdcs.com/public/tcc/scripts/' . $op . '.js';
					print file_exists($file);
					$start = microtime(TRUE);
					exec('mongo < "' . $file . '"');
					$finish = microtime(TRUE);
					$exec_time[$i] = ($finish - $start);
					break;
			}
		}
		
		print '<pre>' . print_r($exec_time, true) . '</pre>';
		
		return View::make('script')->with('exec_time', (array_sum($exec_time) / count($exec_time)));
	}
}
