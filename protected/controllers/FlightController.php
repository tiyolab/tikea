<?php

class FlightController extends Controller
{
	public $layout='main';

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		$data_airport=null;

		$data_airport = $this->get_flight_airport();

		$flightModel = new SearchFlightForm;

		$this->render('index', [
			'airport'=>$data_airport, 
			'model'=>$flightModel
		]);
	}

	public function actionSearch(){
		$data_airport=null;
		$data_flight=null;

		$data_airport = $this->get_flight_airport();
		$data_flight = $this->get_flight();

		$flightModel = new SearchFlightForm;
		$flightModel->departure = $_GET['d'];
		$flightModel->arrival = $_GET['a'];

		$arr_date = explode("-", $_GET['date']);
		$flightModel->departDate = $arr_date[1]."/".$arr_date[2]."/".$arr_date[0];

		$flightModel->adult = $_GET['adult'];
		$flightModel->kids = $_GET['child'];
		$flightModel->infants = $_GET['infant'];

		$this->render('search', [
			'search_data'=>$_GET,
			'airport'=>$data_airport,
			'flight'=>$data_flight,
			'model'=>$flightModel
		]);	
	}

	private function get_flight_airport(){
		if(isset(Yii::app()->session['token']) || !empty(Yii::app()->session['token'])){
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
				
			$response_all_airport = $client_all_airport->request();
			if($response_all_airport->isSuccessful()){
				$tmp_data_airPort = json_decode($response_all_airport->getBody());
				if($tmp_data_airPort->diagnostic->status == 200){
					return $tmp_data_airPort->all_airport->airport;
				}
			}
		}
		
		return null;
	}

	private function get_flight(){
		if(isset(Yii::app()->session['token']) || !empty(Yii::app()->session['token'])){
			Yii::import('application.vendor.httpclient.*');	
			Yii::import('application.vendor.httpclient.adapter.*');

			$client_flight = new EHttpClient(
					/*'http://api-sandbox.tiket.com/search/flight?d='.$_GET['d'].'&a='.$_GET['a'].'&date='.$_GET['date'].'&adult='.$_GET['adult'].'&child='.$_GET['child'].'&infant='.$_GET['infant'].'&token='.Yii::app()->session['token'].'&v=3&output=json', */
					'http://api-sandbox.tiket.com/search/flight?d=CGK&a=DPS&date=2014-05-25&adult=1&child=0&infant=0&token='.Yii::app()->session['token'].'&v=3&output=json',
			array(
	    			'maxredirects' => 0,
	    			'timeout'      => 30,
	    			'adapter'      => 'EHttpClientAdapterCurl'
	    		)
			);
				
			$response_flight = $client_flight->request();
			if($response_flight->isSuccessful()){
				$tmp_data_flight = json_decode($response_flight->getBody());
				if($tmp_data_flight->diagnostic->status == 200){
					return $tmp_data_flight;
				}
			}	
		}
		
		return null;
	}
}