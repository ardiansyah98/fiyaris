<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiga extends CI_Controller {
	
	public function index()
	{
		$questionArray = array(20,10,100,30,15,5);
		$sortedArray = $this->SortArray($questionArray);
		$data['sortedArray'] = $sortedArray;

		array_push($sortedArray, 120);
		$data['addedSortedArray'] = $sortedArray;

		if (($key = array_search(10, $sortedArray)) !== false) {
			unset($sortedArray[$key]);
		}
		$data['remove10FromSortedArray'] = $sortedArray;

		$this->load->view('v_tiga', $data);
	}

	private function SortArray($questionArray){
		$sortedArray = array();
		$tempArray = $questionArray;
		$lengthArray = sizeof($questionArray);

		for($i = 0; $i<$lengthArray; $i++){
			$lowestCandidate = $tempArray[0];
			$lowestIndex = 0;
			for($j = 0; $j<sizeof($tempArray) ; $j++){
				if($tempArray[$j] < $lowestCandidate){
					$lowestCandidate = $tempArray[$j];
					$lowestIndex = $j;
				}
			}

			array_push($sortedArray, $lowestCandidate);
			//remove array element
			unset($tempArray[$lowestIndex]);
			//reorder index of array
			$tempArray = array_values($tempArray);
		}

		return $sortedArray;
	}
}
