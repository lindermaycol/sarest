<?php
namespace apipradsis\modules\v1\models\searches;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use apipradsis\modules\v1\models\Project;
/**
 * OwnerSearch represents the model behind the search form about `app\models\Owner`.
 */
class ProjectSearch extends Project
{
    
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */

    public function altersession()
    {
    	Yii::$app->db->createCommand("ALTER SESSION SET NLS_SORT=BINARY_CI")->execute();
		Yii::$app->db->createCommand("ALTER SESSION SET NLS_COMP=LINGUISTIC")->execute();
		Yii::$app->db->createCommand("ALTER SESSION SET NLS_SORT=BINARY_AI")->execute();
		Yii::$app->db->charset="UTF8";
    }
    public function search($params)
    {
    	if(isset($params['YII_CSRF_TOKEN']))
    	{
    		unset($params['YII_CSRF_TOKEN']);
    		$this->altersession();
	    	$sqlwhere='';
	    	if (empty($params))
			{
			}
			else
			{
				
		        foreach ($params as $field => $value)
		        {
		        	
		        	if (strlen($value))
		        	{
		        		$value=clean_string($value);

			        	switch ($field) {
			        		case 'NUSU_ID':
			        			$sql_inner_join='TBLPRO_PROYECTO.NUSU_ID=U.NUSU_ID AND U.NUSU_ID='.$value;
			        			break;
			        		
			        		case 'NPRO_ID':
			        			if (!is_numeric($value)) {
			        				$value=0;
			        			}
			        			
			        			$sqlwhere=$sqlwhere.' AND '.$field."='".$value."'";
			        			break;
			        		default:
			        			$sqlwhere=$sqlwhere.' AND '."REGEXP_LIKE (".$field.",'".$value."|^".$value."|".$value."$','i')";
			        			break;
			        	}
		        	}
		        }
		        $sqlwhere=substr($sqlwhere, 4);
			}
			$query = Project::find()
		        	->select('*');

		    if (strlen($sqlwhere))
		    {
		    	$query->where($sqlwhere);
		    }

	        if (isset($sql_inner_join))
	        {
	        	$query->innerJoin('TBLPRO_USUARIO U',$sql_inner_join);
	        }

	        $command = $query->createCommand();

	        $models = $command->queryAll();
			
	        /*echo "<pre>";
	    	print_r($models);
	    	echo "</pre>";*/
	        //echo $command->getRawSql();
        	//exit();

    	}
    	else
    	{

    		$models=array();
    	}

        return $models;           
    }

	 

}