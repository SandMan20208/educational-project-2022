<?php
namespace app\controllers; //объявляем пространство имён
use Yii;
use yii\web\Controller; //импортируем родительский класс
use yii\data\ActiveDataProvider;
use app\models\Posts;
use app\models\News;

class ContentController extends Controller
{
    public $layout = 'contentManager';

    public function actionContent()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Posts::find(),
            'pagination' => [
            'pageSize' => 10, 
            ],
        ]);
        return $this -> render('content', ['dataProvider' => $dataProvider]);

    }

    public function actionNewContent()
    {   
        $model = new Posts;
        if ($model->load(Yii::$app->request->post()))
        {
            $model -> block = '0';
            $model -> save();
            $model = new Posts;
            Yii::$app->session->setFlash('success', 'Запись сохранена!');
            return $this->render('newContent', ['model' => $model]);
        }
        return $this->render('newContent', ['model' => $model]);
    }

    public function actionView($id)
    {
        $model= Posts::findOne($id);
        return $this->render('view', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model= Posts::findOne($id);
		if ($model->load(Yii::$app->request->post())){
            $blocks = Posts::find() -> where(['block' => $model->block])->all();
                foreach ($blocks as $block)
                {
                    $block -> block = '0';
                    $block -> save();
                }
            $model->save();
            Yii::$app->session->setFlash('success', 'Запись сохранена!');
			return $this->render('update', ['model' => $model]);
		}
        return $this->render('update', ['model' => $model]);
	}

    public function actionNews()
    {   
        $dataProvider = new ActiveDataProvider([
            'query' => News::find(),
            'pagination' => [
            'pageSize' => 10, 
            ],
        ]);
        return $this->render('news', ['dataProvider' => $dataProvider ]);
    } 

    public function actionViewNews($id){
        $model= News::findOne($id);
        return $this->render('viewNews', ['model' => $model]);
    }
    
    public function actionUpdateNews($id)
    {
        $model= News::findOne($id);
		if ($model->load(Yii::$app->request->post())){
			$model->save();
            Yii::$app->session->setFlash('success', 'Запись сохранена!');
			return $this->render('updateNews', ['model' => $model]);
		}
        return $this->render('updateNews', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model= Posts::findOne($id);
        if ($model){
            $model->delete();
        }
        return $this->redirect(['content']);
    }

    public function actionDeletenews($id)
    {
        $model= News::findOne($id);
        if ($model){
            $model->delete();
        }
        return $this->redirect(['news']);
    }

    public function actionNewNews()
    {
        $model = new News;
        if ($model->load(Yii::$app->request->post())){
            $model -> save();
            
        }
        return $this->render('NewNews', ['model' => $model ]);
    }
}
