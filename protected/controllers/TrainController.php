<?php

class TrainController extends Controller
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
		Yii::import('application.vendor.httpclient.*');	
		Yii::import('application.vendor.httpclient.adapter.*');

		/*$client_all_airport = new EHttpClient(
				'https://api-sandbox.tiket.com/flight_api/all_airport?token='.Yii::app()->session['token'].'&output=json', 
		array(
    			'maxredirects' => 0,
    			'timeout'      => 30,
    			'adapter'      => 'EHttpClientAdapterCurl'
    		)
		);*/
			
		$data_station=null;
		/*$response_all_airport = $client_all_airport->request();
		if($response_all_airport->isSuccessful()){
			$tmp_data_airPort = json_decode($response_all_airport->getBody());
			if($tmp_data_airPort->diagnostic->status == 200){
				$data_airport = $tmp_data_airPort->all_airport->airport;
			}
		}*/

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
			'station'=>$data_station, 
			'model'=>$trainModel,
			'train_class'=>['all'=>'Semua', 'bis'=>'Bisnis', 'eks'=>'Eksekutif', 'eco'=>'Ekonomi']
		]);
	}

	public function actionSearch(){
		var_dump($_GET);
	}
}