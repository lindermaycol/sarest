<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use Edvlerblog\Ldap;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','apispec'],
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        /*$un = 'MCORRO';
        $pw = 'LinderMaycol2016';
        if(Yii::$app->ldap->authenticate($un,$pw)) {
            echo 'User successfully authenticated';
        } else {
            echo 'User or Password wrong';
        }
        echo "<pre>";
        print_r(Yii::$app->ldap);
            echo "</pre>";
           // exit();
        /*$ad = new ldap(Yii::$app->params['ldap']['options']);
        $un = 'MCORRO';
        $pw = 'LinderMaycol2016';
        if($ad->authenticate($un,$pw)) {
            echo 'User successfully authenticated';
        } else {
            echo 'User or Password wrong';
        }*/
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays api specification page.
     *
     * @return mixed
     */
    public function actionApispec()
    {

        return $this->render('apispec',['apiparams'=>Yii::$app->request->queryParams]);
    }
}
