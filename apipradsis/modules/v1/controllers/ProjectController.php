<?php
 
namespace apipradsis\modules\v1\controllers;
use Yii;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use apipradsis\modules\v1\models\searches\ProjectSearch;
use yii\web\Response;
/**
 * Project Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class ProjectController extends ActiveController
{
    public $modelClass = 'apipradsis\modules\v1\models\Project';

    /**
     * Default response format
     * either 'json' or 'xml'
     */
    private $format = 'json';
    /**
     * @return array action filters
     */
    public function filters()
    {
            return array();
    }
 
    // Actions
    public function actionList()
    {
    	$response=$this->actionSearch();
    }
    public function actionView()
    {

    }
    public function actionCreate()
    {
    }
    public function actionUpdate()
    {
    }
    public function actionDelete()
    {
    }
    
    public function actionSearch()
	{
        $params=Yii::$app->request->queryParams;
        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $model=array();
        if(isset($params['YII_CSRF_TOKEN']))
        {
            cors();
            $searchModel = new ProjectSearch();
            $searchModel->altersession();
            $model = $searchModel->search(Yii::$app->request->queryParams);
            if(empty($model)) {
                $model[]=array("response"=>"200",
                                'message'=>'No existe datos al respecto');
                
            }
        }
        else
        {
            $model[]=array("response"=>"400",
                            'message'=>'Por favor ingrese un token de usuario autenticado');
        }

		$response->data = utf8ize($model);
	    return $response;
	}

	
}