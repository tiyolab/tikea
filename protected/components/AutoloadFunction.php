<?php

class AutoloadFunction extends CApplicationComponent{
	
	public function constructToken(){
		if(!isset(Yii::app()->session['token']) || empty(Yii::app()->session['token'])){
			Yii::import('application.vendor.httpclient.*');	
			Yii::import('application.vendor.httpclient.adapter.*');
			$client = new EHttpClient(
				'https://api-sandbox.tiket.com/apiv1/payexpress?method=getToken&output=json&secretkey='.Yii::app()->params['secretKey'], 
				array(
    				'maxredirects' => 0,
    				'timeout'      => 30,
    				'adapter'      => 'EHttpClientAdapterCurl'
    			)
			);
			
			$response = $client->request();
			if($response->isSuccessful()){
				$data = json_decode($response->getBody());
				Yii::app()->session['token'] = $data->token;
			}else{
				return null;
			}
		}
	}
}