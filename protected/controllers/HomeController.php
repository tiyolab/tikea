<?php

class HomeController extends Controller
{
	public $layout='main';

	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		$active_tab = 0;
		$data_airport=null;
		$data_station=null;

		$data_airport = $this->get_flight_airport();

		$flightModel = new SearchFlightForm;
		$trainModel = new SearchTrainForm;

		$this->render('index', [
			'active_tab'=>$active_tab,
			'airport'=>$data_airport,
			'flightModel'=>$flightModel,
			'station'=>$data_station,
			'trainModel'=>$trainModel,
			'train_class'=>['all'=>'Semua', 'bis'=>'Bisnis', 'eks'=>'Eksekutif', 'eco'=>'Ekonomi']
		]);
	}

	public function actionSearchFlight(){
		$active_tab = 1;
		$data_airport=null;
		$data_station=null;

		$flightModel = new SearchFlightForm;
		$trainModel = new SearchTrainForm;

		if(isset($_POST['SearchFlightForm']) && !empty($_POST['SearchFlightForm'])){
			$flightModel->attributes = $_POST['SearchFlightForm'];
			if($flightModel->validate()){
				$arr_date = explode("/", $flightModel->departDate);
				$date = $arr_date[2]."-".$arr_date[0]."-".$arr_date[1];
				$this->redirect([
					"flight/search",
					"s_d"=>$_POST['s_d'],
					"d"=>$flightModel->departure,
					"s_a"=>$_POST['s_a'],
					"a"=>$flightModel->arrival,
					"date"=>$date,
					"adult"=>$flightModel->adult,
					"child"=>$flightModel->kids,
					"infant"=>$flightModel->infants
				]);
			}else{
				$data_airport = $this->get_flight_airport();
			}
		}else{
			$data_airport = $this->get_flight_airport();
		}

		$this->render('index', [
			'active_tab'=>$active_tab,
			'airport'=>$data_airport,
			'flightModel'=>$flightModel,
			'station'=>$data_station,
			'trainModel'=>$trainModel,
			'train_class'=>['all'=>'Semua', 'bis'=>'Bisnis', 'eks'=>'Eksekutif', 'eco'=>'Ekonomi']
		]);
	}

	public function actionSearchTrain(){
		$active_tab = 2;
		
		$data_airport=null;
		$data_station=null;

		$data_airport = $this->get_flight_airport();

		$flightModel = new SearchFlightForm;
		$trainModel = new SearchTrainForm;
		
		if(isset($_POST['SearchTrainForm']) && !empty($_POST['SearchTrainForm'])){
			$trainModel->attributes = $_POST['SearchTrainForm'];
			if($trainModel->validate()){
				$this->redirect([
					"train/search",
					"d"=>$trainModel->departure,
					"a"=>$trainModel->arrival,
					"date"=>$trainModel->departDate,
					"adult"=>$trainModel->adult,
					"child"=>$trainModel->kids,
					"infant"=>$trainModel->infants,
					"class"=>$trainModel->class
				]);
			}
		}

		$this->render('index', [
			'active_tab'=>$active_tab,
			'airport'=>$data_airport,
			'flightModel'=>$flightModel,
			'station'=>$data_station,
			'trainModel'=>$trainModel,
			'train_class'=>['all'=>'Semua', 'bis'=>'Bisnis', 'eks'=>'Eksekutif', 'eco'=>'Ekonomi']
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
}