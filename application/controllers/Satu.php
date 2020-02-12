<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satu extends CI_Controller {
	
	public function index()
	{
		$data['arrOddNumbers'] = $this->GenerateOddNumbers(1, 15);
		$this->load->view('v_satu', $data);
	}

	private function GenerateOddNumbers($min_number, $max_number){
		$oddNumberArray = array();

		//not used $i = $i +2 because for handling min_number parameter input by even number
		for($i = $min_number; $i <= $max_number; $i++){
			if($i % 2 == 1)
				array_push($oddNumberArray, $i);
		}

		return $oddNumberArray;
	}
}
