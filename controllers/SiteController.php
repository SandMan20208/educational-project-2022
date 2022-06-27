<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\AllUsers;

/*
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
/*    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
 /*   public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
/*    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
/*    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
/*    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
/*    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
/*    public function actionAbout()
    {
        return $this->render('about');
    }
}
*/
class SiteController extends Controller
{
    public $layout = 'basic';
    
    public function actionAutorisation(){
        $session = Yii::$app->session;
        $model = new LoginForm();
        if ($model ->load(Yii::$app->request->post())){
            $modelUser = AllUsers::find() -> where(['username' => $model -> username])->one();
            if ($modelUser -> password === md5($model -> password) && $modelUser -> position == 'operator'){
                $session['user'] = 
                [
                    'position' => $modelUser -> position,
                    'username' => $modelUser -> username,
                ];
                return $this -> redirect('index.php?r=operator%2Fnewticket');
            } 
            elseif ($modelUser -> password == md5($model -> password) && $modelUser -> position == 'admin'){
                $session['user'] = 
                [
                    'position' => $modelUser -> position,
                    'username' => $modelUser -> username,
                ];
                return $this -> redirect('index.php?r=admin%2Fusers');
            }else 
            {
                Yii::$app->session->setFlash('success', 'Неверный логин или пароль!');
                return $this->render('autorisation',['model'=>$model]);
            } 
            $log = $modelUser -> username;
            $pass = ($modelUser -> password); 
        }
        return $this -> render('autorisation', ['model' => $model]);
    }
}