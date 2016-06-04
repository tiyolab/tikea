<?php

class HomeController extends Controller
{
	public $layout='main';

	public function actionIndex()
	{
		Yii::import('application.vendor.httpclient.*');	
		Yii::import('application.vendor.httpclient.adapter.*');

		$client_all_airport = new EHttpClient(
				'https://api-sandbox.tiket.com/flight_api/all_airport?token='.Yii::app()->session['token'].'&output=json', 
		array(
    			'maxredirects' => 0,
    			'timeout'      => 30,
    			'adapter'      => 'EHttpClientAdapterCurl'
    		)
		);
			
		$data_airport=null;
		$response_all_airport = $client_all_airport->request();
		if($response_all_airport->isSuccessful()){
			$tmp_data_airPort = json_decode($response_all_airport->getBody());
			if($tmp_data_airPort->diagnostic->status == 200){
				$data_airport = $tmp_data_airPort->all_airport->airport;
			}
		}

		$this->render('index', ['airport'=>$data_airport]);
	}
}