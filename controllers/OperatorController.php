<?php 
namespace app\controllers; //объявляем пространство имён
use Yii;
use yii\web\Controller; //импортируем родительский класс
use app\models\AllTicket;
use app\models\LoginForm;
use app\models\SearchModel;
use app\models\User;
use app\models\UserIdentity;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;

class OperatorController extends Controller{
	public $layout = 'operator';
	
	//Принятые заявки
	public function actionTicket(){
		$this -> loginCheck();
		$model = new SearchModel();
		if ($model->load(Yii::$app->request->post())){
			$dataProvider = new ActiveDataProvider([
				'query' => AllTicket::find()->where(['last_name' => $model->search, 'status' => 'accepted']),
				'pagination' => [
				'pageSize' => 10, 
				],
			]); 
			return $this->render('ticket', ['model'=>$model, 'dataProvider' => $dataProvider]);
		} else {
				$dataProvider = new ActiveDataProvider(
					[
    				'query' => AllTicket::find()->where(['status' => 'accepted']),
    				'pagination' => [
        			'pageSize' => 10, 
    				],
					]);
				}
		return $this->render('ticket', ['dataProvider'=>$dataProvider, 'model'=>$model]);
	}

	//Все заявки
	public function actionAllticket(){
		$this -> loginCheck();
		$model = new SearchModel();
		if ($model->load(Yii::$app->request->post())){
			$dataProvider = new ActiveDataProvider([
				'query' => AllTicket::find()->where(['last_name' => $model->search]),
				'pagination' => [
				'pageSize' => 10, 
				],
			]); 
			return $this->render('allticket', ['model'=>$model, 'dataProvider' => $dataProvider]);
		} else {
				$dataProvider = new ActiveDataProvider(
					[
    				'query' => AllTicket::find(),
    				'pagination' => [
        			'pageSize' => 10, 
    				],
					]);
				}
		return $this->render('allticket', ['dataProvider'=>$dataProvider, 'model'=>$model]);
	}

	//Редактировать
	public function actionUpdate($id)
	{
		$this -> loginCheck();
		$model= AllTicket::findOne($id);
		if ($model->load(Yii::$app->request->post())){
			$model-> status = 'accepted';
			$model->date = date('Y-m-d H-i-s');
			$model->save();
			Yii::$app->session->setFlash('success', 'Запись сохранена!');
			return $this->render('edit', ['model' => $model]);
		}
		return $this->render('edit', ['model' => $model]);
	}

	//Создать заявку
	public function actionNewticket()
	{
		$this -> loginCheck();
		$model= new AllTicket();
		if ($model->load(Yii::$app->request->post())){
			$model-> status = 'accepted';
			$model->date = date('Y-m-d H-i-s');
			$model->save();
			$model = new AllTicket();
			Yii::$app->session->setFlash('success', 'Запись сохранена!');
			return $this->render('newticket', ['model' => $model]);
		}
		return $this->render('newticket', ['model' => $model]);
	}

	//Онлайн-заявки
	public function actionOnlineticket()
	{
		$this -> loginCheck();
		$model = new SearchModel();
		if ($model->load(Yii::$app->request->post())){
			$dataProvider = new ActiveDataProvider([
				'query' => AllTicket::find()->where(['last_name' => $model->search, 'status' => 'online']),
				'pagination' => [
				'pageSize' => 10, 
				],
			]); 
			return $this->render('onlineticket', ['model'=>$model, 'dataProvider' => $dataProvider]);
		} else {
			$dataProvider = new ActiveDataProvider([
    		'query' => AllTicket::find() -> where(['status' => 'online']),
    		'pagination' => [
        					'pageSize' => 10, 
    						],
			]);
			}
		return $this->render('onlineticket', ['dataProvider'=>$dataProvider, 'model' => $model]);
	}

	//Удаление записей
	//Удалить онлайн-заявку
	public function actionDelete($id)
    {
		$this -> loginCheck();
        $model= AllTicket::findOne($id);
        if ($model){
            $model->delete();
        }
        return $this->redirect(['onlineticket']);
    }

	//Удалить принятую заявку
	public function actionDeltick($id)
    {
		$this -> loginCheck();
        $model= AllTicket::findOne($id);
        if ($model){
            $model->delete();
        }
        return $this->redirect(['ticket']);
    }

	//удалить заявку из списка "все заявки"
	public function actionDelalltick($id)
    {
		$this -> loginCheck();
        $model= AllTicket::findOne($id);
        if ($model){
            $model->delete();
        }
        return $this->redirect(['allticket']);
    }

	//LogOut
	public function actionLoginout()
    {
        $session = Yii::$app->session;
        $session -> open();
        if (isset($session['user']))
        {
            unset($session['user']);
        } 
        $session->close();
        return $this -> redirect('index.php?r=site%2Fautorisation');
    }

	//проверка логина
    public function loginCheck()
	{
		$session = Yii::$app->session;
		if (isset($session['user'])){
            if ($session['user']['position'] != 'operator'){
			    return $this->redirect('index.php?r=site%2Fautorisation');
		    }
        } else 
		return $this->redirect('index.php?r=site%2Fautorisation');
		$session->close();
	}
}
?>