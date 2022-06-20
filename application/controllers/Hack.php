<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hack extends MY_Controller
{

	public function index()
	{
		$listGame = $this->getDataRow('game', '*');
		$listOption = $this->getDataRow('option', '*');

		$data['html']['listGame'] = $listGame;
		$data['html']['listOption'] = $listOption;
		$data['html']['title'] = 'Mod Game Hacking';
		$data['url'] = 'public/body';
		$this->templatePublic($data);
	}

	public function V3()
	{
		$listGame = $this->getDataRow('game', '*');
		$data['html']['listGame'] = $listGame;
		$data['html']['title'] = 'Hacktools V3';
		$data['url'] = 'public/V3';
		$this->templatePublic($data);
	}

	public function ajax($action = '')
	{
		switch ($action) {
			case 'requesOtp':
				// %0A  enter wa
				$otp = $this->generateRandomString(4);
				$massage = 'Hai UserId ' . $_POST['id'] . ' berikut adalah kode OTP anda %0AOTP: ' . $otp . '%0Ajangan berikan kode ini keorang lain';
				$this->delete('customer', array('userid' => $_POST['id'], 'phone' => $_POST['wa'], 'status' => 0));
				$this->insert('customer', array('otp' => $otp, 'userid' => $_POST['id'], 'phone' => $_POST['wa'], 'devices' => $_POST['devices']));
				$this->sendOtp($_POST['wa'], $massage);
				echo json_encode('done');
				break;
			case 'sendOtp':
				$data = $this->getDataRow('customer', '*', array('userid' => $_POST['id'], 'phone' => $_POST['wa'], 'status' => 0))[0];
				$status = false;
				if ($data['otp'] == $_POST['otp']) {
					$status = true;
					$chek = $this->getDataRow('customer', '*', array('userid' => $_POST['id'], 'phone' => $_POST['wa'], 'status' => 0));
					$chekAktif = $this->getDataRow('customer', '*', array('userid' => $_POST['id'], 'phone' => $_POST['wa'], 'status' => 1));
					if (count($chekAktif) !== 1 && count($chek) == 1) {
						$this->update('customer', array('status' => 1), array('userid' => $_POST['id'], 'phone' => $_POST['wa'], 'status' => 0));
					}
				}
				echo json_encode(array('status' => $status));
				break;
			default:
				$game = $this->getDataRow('game', '*', array('name' => $_POST['name']));
				echo json_encode($game[0]);
				break;
		}
	}

	function generateRandomString($length = 4)
	{
		return rand(1000, 9999);
	}

	public function sendOtp($phone = '', $massage = '')
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost:8000/send',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'phone=' . $phone . '&massage=' . $massage,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded'
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
	}
}
