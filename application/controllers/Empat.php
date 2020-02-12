<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empat extends CI_Controller {
	
	public function index()
	{
		$questionString = 'Aku Suka Makan Nasi Padang';
		$data['formattedArrQuestionString'] = $this->GenerateFormattedArrayFromString($questionString);
		$this->load->view('v_empat', $data);
	}

	private function GenerateFormattedArrayFromString($questionString){
		$formattedArray = array();
		$arrString = explode(' ',$questionString);
		$arrLength = sizeof($arrString);

		$tempString = array();
		for($i = 0; $i < $arrLength ; $i++){
			array_push($tempString,$arrString[$i]);
			array_push($formattedArray, implode(' ',$tempString)); 
		}

		$tempString = array();
		for($i = $arrLength-1; $i >= 0 ; $i--){
			array_push($tempString,$arrString[$i]);
			array_push($formattedArray, implode(' ',$tempString)); 
		}		

		return $formattedArray;
	}
}
