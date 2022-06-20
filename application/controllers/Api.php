<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends MY_Controller
{

	public function index()
	{
		$level = $this->getDataRow('level', '*');
		foreach ($level as $levelKey => $levelValue) {
			$game = $this->getDataRow('game', '*', array('levelkey' => $levelValue['pkey']));
			foreach ($game as $gameKey => $gameValue) {
				$percentage = rand($levelValue['start'], $levelValue['end']);
				$this->update('game', array('percentage' => $percentage), array('pkey' => $gameValue['pkey']));
			}
		}
		return true;
	}
}
