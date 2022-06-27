<?php
namespace app\controllers;

use app\models\AllTicket;
use Yii;
use yii\web\Controller;
use app\models\Posts;
use app\models\News;

class FrontendController extends Controller
{

    public $layout = 'frontend';

    public function actionIndex()
    {   
        $block1 = Posts::find()->where(['block' => 1])->one();
        $block2 = Posts::find()->where(['block' => 2])->one();
        $block3 = Posts::find()->where(['block' => 3])->one();
        $model = new AllTicket();
        if ($model -> load(Yii::$app->request->post())){
            $model -> status = 'online';
            $model->date = date('Y-m-d H-i-s');
			$model->save();
            $model=new AllTicket();
            Yii::$app->session->setFlash('success', 'Заявка отправлена!');
            return $this->render('index', ['model' => $model, 'block1'=>$block1, 'block2'=>$block2, 'block3'=>$block3 ]);
        }
        return $this -> render('index', ['model' => $model, 'block1'=>$block1, 'block2'=>$block2, 'block3'=>$block3 ]);
    }

    public function actionNews()
    {   
        $news = News::find()->orderBy('sort')->all();
        return $this->render('news', ['news' => $news]);
    }

}