<?php

class SearchFlightForm extends CFormModel{
	public $departure;
	public $arrival;
	public $departDate;
	public $adult=1;
	public $kids=0;
	public $infants=0;
	public $verifyCode;

	public function rules(){
		return array(
			array('departure, arrival, departDate', 'required'),
			array('adult, kids, infants', 'numerical'),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	public function attributeLabels(){
		return array(
			'departure'=>'Bandara Keberangkatan',
			'arrival'=>'Bandara Tujuan',
			'departDate'=>'Tanggal Keberangkatan',
			'adult'=>'Dewasa',
			'kids'=>'Anak-anak',
			'infants'=>'Bayi',
			'verifyCode'=>'Kode Verifikasi'
		);
	}

}