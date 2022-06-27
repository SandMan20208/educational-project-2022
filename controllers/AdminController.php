<?php
namespace app\controllers; //объявляем пространство имён
use Yii;
use yii\web\Controller; //импортируем родительский класс
use yii\data\ActiveDataProvider;
use app\models\AllUsers;
use app\models\SearchModel;
use app\models\AllTicket;

class AdminController extends Controller{
   public $layout = 'admin';

   public function actionUsers(){
        $this -> loginCheck();
        $dataProvider = new ActiveDataProvider([
            'query' => AllUsers::find(),
            'pagination' => [
            'pageSize' => 10, 
        ],
    ]);
    return $this->render('users', ['dataProvider'=>$dataProvider]);
   }

   public function actionUpdate($id)
	{
        $this -> loginCheck();
		$model= AllUsers::findOne($id);
		if ($model->load(Yii::$app->request->post())){
			$pass = $model->password;
            $model -> password = md5($pass);
            $model->save();
            $model->password = '';
			Yii::$app->session->setFlash('success', 'Запись сохранена!');
			return $this->render('update', ['model' => $model]);
		}
        $model->password = '';
		return $this->render('update', ['model' => $model]);
	}
    
    //удаление пользователей
    public function actionDelete($id)
    {
        $this -> loginCheck();
        $model= AllUsers::findOne($id);
        if ($model){
            $model->delete();
        }
        return $this->redirect(['users']);
    }

    //удаление заявок
    public function actionDeladmtick($id)
    {
        $this -> loginCheck();
        $model= AllTicket::findOne($id);
        if ($model){
            $model->delete();
        }
        return $this->redirect(['allticket']);
    }

    public function actionNewuser()
	{
        $this -> loginCheck();
		$model= new AllUsers();
		if ($model->load(Yii::$app->request->post())){
			$userCheck = AllUsers::find()->where(['username' => $model->username])->count();
            if ($userCheck == 0){
                $pass = $model->password;
                $model -> password = md5($pass);
                $model->save();
                $model = new AllUsers();
			    Yii::$app->session->setFlash('success', 'Запись сохранена!');
			    return $this->render('newuser', ['model' => $model]); 
            }else{
                Yii::$app->session->setFlash('success', 'Пользователь уже существует!');
			    return $this->render('newuser', ['model' => $model]);
            }
        }
        
		return $this->render('newuser', ['model' => $model]);
	}

    public function actionAllticket()
    {
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
    //Проверка логина
    public function loginCheck()
	{
		$session = Yii::$app->session;
		if (isset($session['user'])){
            if ($session['user']['position'] != 'admin'){
			    return $this->redirect('index.php?r=site%2Fautorisation');
		    }
        } else 
            return $this->redirect('index.php?r=site%2Fautorisation');
        $session->close();
	}
}