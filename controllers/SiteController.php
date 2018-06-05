<?php

namespace app\controllers;

use app\models\Articles;
use app\models\Content;
use app\models\Files;
use app\models\Images;
use app\models\Music;
use app\models\Video;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
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
    public function actions()
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
    public function actionIndex()
    {
        $video = Video::findAll(['id' => 1]);
        $articles = Articles::find()->orderBy(['id' => SORT_DESC])->limit(6)->all();
        $images = Images::find()->select('path')->all();
        $musics = Music::find()->all();
        $files = Files::find()->all();
        $mainMusic = Music::find()->select('path')->where(['name' => 'main'])->one();

        $content = Content::find()->all();

        foreach ($content as $key => $single){
            $contentArray[$key] = $single;
        }

        foreach ($mainMusic as $single){
            $mainMusic = $single;
        }


        foreach ($files as $key => $single)
        {
            $filesArray[$key] = $single->path;
        }

        foreach ($video as $single)
        {
            $url = substr($single->url, strpos($single->url, '=') + 1, strlen($single->url));;
        }

        return $this->render('index',['articles' => $articles, 'video' => $url, 'images' => $images, 'files' => $filesArray, 'music' => $musics, 'mainMusic' => $mainMusic, 'content' => $contentArray]);
    }
    public function actionLogin()
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
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
 }
