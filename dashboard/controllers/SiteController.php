<?php
namespace dashboard\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use dashboard\models\PasswordResetRequestForm;
use dashboard\models\ResetPasswordForm;
use dashboard\models\SignupForm;
use dashboard\models\ContactForm;

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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'view' => '@yiister/gentelella/views/error',
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
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
        

    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {

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

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    /**
     * Displays panel1 page.
     *
     * @return mixed
     */
    public function actionPanel1()
    {
        return $this->render('panel1');
    }
    /**
     * Displays panel2 page.
     *
     * @return mixed
     */
    public function actionPanel2()
    {
        return $this->render('panel2');
    }

    /**
     * Displays generalform page.
     *
     * @return mixed
     */
    public function actionGeneralform()
    {
        return $this->render('generalform');
    }
    /**
     * Displays advancedform page.
     *
     * @return mixed
     */
    public function actionAdvancedform()
    {
        return $this->render('advancedform');
    }
    /**
     * Displays validationform page.
     *
     * @return mixed
     */
    public function actionValidationform()
    {
        return $this->render('validationform');
    }

    /**
     * Displays wizardform page.
     *
     * @return mixed
     */
    public function actionWizardform()
    {
        return $this->render('wizardform');
    }
    /**
     * Displays uploadform page.
     *
     * @return mixed
     */
    public function actionUploadform()
    {
        return $this->render('uploadform');
    }
    /**
     * Displays buttonform page.
     *
     * @return mixed
     */
    public function actionButtonform()
    {
        return $this->render('buttonform');
    }

    /**
     * Displays generalelements page.
     *
     * @return mixed
     */
    public function actionGeneralelements()
    {
        return $this->render('generalelements');
    }

    /**
     * Displays galerias page.
     *
     * @return mixed
     */
    public function actionGalerias()
    {
        return $this->render('galerias');
    }
    /**
     * Displays tipografia page.
     *
     * @return mixed
     */
    public function actionTipografia()
    {
        return $this->render('tipografia');
    }
    /**
     * Displays iconos page.
     *
     * @return mixed
     */
    public function actionIconos()
    {
        return $this->render('iconos');
    }
    /**
     * Displays glyiconos page.
     *
     * @return mixed
     */
    public function actionGlyiconos()
    {
        return $this->render('glyiconos');
    }
    /**
     * Displays widgets page.
     *
     * @return mixed
     */
    public function actionWidgets()
    {
        return $this->render('widgets');
    }

    /**
     * Displays recibos page.
     *
     * @return mixed
     */
    public function actionRecibos()
    {
        return $this->render('recibos');
    }
    /**
     * Displays bandeja page.
     *
     * @return mixed
     */
    public function actionBandeja()
    {
        return $this->render('bandeja');
    }
    /**
     * Displays calendario page.
     *
     * @return mixed
     */
    public function actionCalendario()
    {
        return $this->render('calendario');
    }
    

    /**
     * Displays tablas page.
     *
     * @return mixed
     */
    public function actionTablas()
    {
        return $this->render('tablas');
    }
    /**
     * Displays tablasdinamicas page.
     *
     * @return mixed
     */
    public function actionTablasdinamicas()
    {
        return $this->render('tablasdinamicas');
    }
    /**
     * Displays chartjs page.
     *
     * @return mixed
     */
    public function actionChartjs()
    {
        return $this->render('chartjs');
    }
    /**
     * Displays chartjs2 page.
     *
     * @return mixed
     */
    public function actionChartjs2()
    {
        return $this->render('chartjs2');
    }
    /**
     * Displays morisjs page.
     *
     * @return mixed
     */
    public function actionMorisjs()
    {
        return $this->render('morisjs');
    }
    

    /**
     * Displays echarts page.
     *
     * @return mixed
     */
    public function actionEcharts()
    {
        return $this->render('echarts');
    }
    /**
     * Displays otroscharts page.
     *
     * @return mixed
     */
    public function actionOtroscharts()
    {
        return $this->render('otroscharts');
    }

    /*
[
    "label" => "Extras", 
    "url" => "#", 
    "icon" => "windows",
    "items" => [
        ["label" => "403 Error", "url" => ["site/403"]],
        ["label" => "404 Error", "url" => ["site/404"]],
        ["label" => "500 Error", "url" => ["site/500"]],
        ["label" => "Página Plana", "url" => ["site/plano"]],
        ["label" => "Login", "url" => ["site/logindashboard"]],
        ["label" => "Tabla de Precios", "url" => ["site/tablaprecios"]]
    ],
    */
     /**
     * Displays ecommerce page.
     *
     * @return mixed
     */
    public function actionEcommerce()
    {
        return $this->render('ecommerce');
    }
    /**
     * Displays proyectos page.
     *
     * @return mixed
     */
    public function actionProyectos()
    {
        return $this->render('proyectos');
    }
    /**
     * Displays detalleproyecto page.
     *
     * @return mixed
     */
    public function actionDetalleproyecto()
    {
        return $this->render('detalleproyecto');
    }
    /**
     * Displays contactos page.
     *
     * @return mixed
     */
    public function actionContactos()
    {
        return $this->render('contactos');
    }
    /**
     * Displays perfil page.
     *
     * @return mixed
     */
    public function actionPerfil()
    {
        return $this->render('perfil');
    }

    /**
     * Displays 403 page.
     *
     * @return mixed
     */
    public function action403()
    {
        return $this->render('403');
    }
    /**
     * Displays 404 page.
     *
     * @return mixed
     */
    public function action404()
    {
        return $this->render('404');
    }
    /**
     * Displays 500 page.
     *
     * @return mixed
     */
    public function action500()
    {
        return $this->render('500');
    }
    

    /**
     * Displays plano page.
     *
     * @return mixed
     */
    public function actionPlano()
    {
        return $this->render('plano');
    }
    /**
     * Displays logindashboard page.
     *
     * @return mixed
     */
    public function actionLogindashboard()
    {
        $this->layout = 'loginlayout';
        return $this->render('logindashboard');
    }
    /**
     * Displays tablaprecios page.
     *
     * @return mixed
     */
    public function actionTablaprecios()
    {
        return $this->render('tablaprecios');
    }

    /**
     * Displays indicadores page.
     *
     * @return mixed
     */
    public function actionIndicadores()
    {
        return $this->render('indicadores');
    }
    /**
     * Displays altagerencia page.
     *
     * @return mixed
     */
    public function actionAltagerencia()
    {
        return $this->render('altagerencia');
    }
    /**
     * Displays encuestas page.
     *
     * @return mixed
     */
    public function actionEncuestas()
    {
        return $this->render('encuestas');
    }
    
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /*public function beforeAction($action)
    {
        if(defined('YII_DEBUG') && YII_DEBUG){
            Yii::$app->assetManager->forceCopy = true;
        }
        return parent::beforeAction($action);
    }*/
}
