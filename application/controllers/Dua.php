<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dua extends CI_Controller {
	
	public function index()
	{
		$date = '2020-11-23';
		$myBirthdayDate = '1996-08-19';
		$data['newFormat'] = $this->FormatDate($date);
		$data['sixMonthDate'] = $this->GenerateDateForNext6Months($date);
		$data['myAge'] = $this->CountAge($date,$myBirthdayDate);
		$this->load->view('v_dua', $data);
	}

	private function FormatDate($date){
		$arrDate = explode('-',$date);
		$day = $arrDate[2];
		$month = $arrDate[1];
		$year = $arrDate[0];

		$newFormat = $month.'-'.substr($year,2,2).'-'.$day;
		return $newFormat;
	}

	private function GenerateDateForNext6Months($date){
		$timeFormat = strtotime($date);
		$nextTimeFormat = strtotime('+6 months', $timeFormat);
		$nextDate = date('Y-m-d',$nextTimeFormat);
		return $nextDate;
	}

	private function CountAge($date, $birthdayDate){
		$timeDate = strtotime($date);
		$timeBirthdayDate = strtotime($birthdayDate);
		$diff = $timeDate - $timeBirthdayDate;

		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

		return $years.' years '.$months.' months '.$days.' days';
	}
}
