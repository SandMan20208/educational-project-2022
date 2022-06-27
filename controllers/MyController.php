<?php 

namespace app\controllers; //объявляем пространство имён

use yii\web\Controller; //импортируем родительский класс
use Yii;
use app\models\TestForm;
use app\models\Pass;

class MyController extends Controller{

	public $layout = 'basic';

public function actionIndex(){
	
	//return $this->render('index', ['hello' => $hi, 'names' => $names]);
	
	//$newTicket = new TestForm();
	//$newTicket->FIO='Петров Василий Николаевич';
	//$newTicket->street='1234';
	//$newTicket->save();

//	if($newTicket->load(Yii::$app->request->post() ) ){
		
//		if ($newTicket->validate() ){
//			Yii::$app->session->setFlash('success', 'Данные приняты');
//			return $this->refresh();
//		}else{
//			Yii::$app->session->setFlash('error', 'Ошибка');
//		}
//	}
	return $this->render('index', compact('newTicket'));
	

}

public function actionShow(){
	
	//$this -> layout = 'basic'; шаблон для страницы show

	//$pass = Pass::find()->asArray()->all();
	return $this->render('show', compact('pass'));
}

}