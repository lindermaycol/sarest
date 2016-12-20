<?php
// instanciate a new client
include_once '../../../vendor/functions/general.php';
include_once '../../../vendor/autoload.php';
if (isset($_GET['type']))
{

	if (isset($_GET['surveyid'])) {

		$params=getParamsRemoteControl();
		$groups=$params['myJSONRPCClient']->list_groups($params['sessionKey'],$_GET['surveyid']);
		foreach ($groups as $group)
		{
			/*$GROUPINFO[$group['gid']]['group_name']=$group['group_name'];
			$GROUPINFO[$group['gid']]['order']=$group['group_order'];
			$GROUPINFO[$group['gid']]['description']=$group['description'];*/
			$html='';
			$questions=$params['myJSONRPCClient']->list_questions($params['sessionKey'],$_GET['surveyid'],$group['gid']);
			$questions = array_filter($questions, function($el) { return $el['parent_qid']==0 && $el['type']!==';' && $el['type']!=='T' && $el['type']!=='N'; });
			/*
			N->ENTRADA NUMERICA
			!->LISTA
			;->MATRIZ
			T->TEXTO
			*/
			$questions = array_map('array_filter', $questions);//quito las preguntas que tienen padre y las preguntas que son matrices
			$html=$html.'<div class="row blockgroup" id="group'.$group['gid'].'">';
			foreach ($questions as $question)
			{

				$html=$html.'<div class="col-md-4 col-sm-4 col-xs-12 ">
				                <div class="x_panel">
				                  <div class="x_title">
				                    <h2>'.$question['question'].'</h2>
				                    <ul class="nav navbar-right panel_toolbox">
				                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				                      </li>
				                    </ul>
				                    <div class="clearfix"></div>
				                  </div>
				                  <div class="x_content">
				                    <div id="question'.$question['qid'].'" style="height:350px;"></div>
				                  </div>
				                </div>
			              </div>
						';		
			}
			$html=$html.'</div>';
			
			
			/*echo "<pre>**************";
			print_r($questions);
			echo "</pre>**************";*/
		}
		export_responses($params['sessionKey'],$params['myJSONRPCClient'],$_GET['surveyid']);
		$responses=filter_responses($_GET['surveyid']);
		$responses=getResponses($_GET['surveyid']);

		/*echo "<pre>";
		echo count($responses);
		print_r($responses);
		echo "</pre>";*/
		echo $html;
	}
	else
	{
		
		$TitleText=array ('text' => 'Graph title','subtext' => 'Graph Sub-text');
		$Axis=array('xAxis'=>'category','yAxis'=>'value');
		$SeriesChart=array ('parcial'=>'bar','completas'=>'bar');
		$Toolbox=array('magicType'=>array ('line' => 'Line','bar' => 'Bar','stack' => 'Stack','tiled' => 'Tiled'),'restore'=>'Restaurar','saveAsImage'=>'Guardar como imagen');
		$SeriesChoosed=array('incomplete_responses','completed_responses');
		$AxisCategory=array('axi'=>array_search('category',$Axis),'value'=>'surveyls_title');
		
		session_start();
		/*echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";*/
		if (!isset($_SESSION["encuestas"] ['summary'])){ 
		   	echo "no existe";
		}else{ 
			$summary=$_SESSION["encuestas"] ['summary'];
			$chart=FormatChart($TitleText,$Axis,$SeriesChart,$Toolbox);
			$chart=LoadDataChart($chart,$summary,$AxisCategory,$SeriesChoosed);
			echo json_encode ($chart);
		}
	}
	
}
else
{
	$params=getParamsRemoteControl();

	$SURVEYS = $params['myJSONRPCClient']->list_surveys($params['sessionKey']);
	$filterBy = 'Y'; // Si la encuesta esta activa.

	$SURVEYS = array_filter($SURVEYS , function ($var) use ($filterBy) {
		return ($var['active'] == $filterBy);
	});


	//session_destroy();
	session_start();
	$_SESSION["encuestas"] ['summary']=array();
	foreach ($SURVEYS as $key => $survey)
	{
		$summary=$params['myJSONRPCClient']->get_summary($params['sessionKey'],$survey['sid'],'all');
		/*echo "<pre>";
		echo $survey['surveyls_title'];
		echo "<br>";
		echo $survey['sid'];
	print_r($summary);
	echo "</pre>";*/
	if ($summary['full_responses']>0)
	{

		$properties=$params['myJSONRPCClient']->get_survey_properties($params['sessionKey'],$survey['sid'],array('datecreated'));
		$date=date("Y/m/d", strtotime($properties['datecreated']));
		$json[]=array($survey['sid'],$survey['surveyls_title'],$date,$summary['incomplete_responses'],$summary['completed_responses'],$summary['full_responses']);
		$_SESSION["encuestas"] ['summary'][]=array('sid'=>$survey['sid'],
													'surveyls_title'=>$survey['surveyls_title'],
													'datecreated'=>$date,
													'incomplete_responses'=>$summary['incomplete_responses'],
													'completed_responses'=>$summary['completed_responses'],
													'full_responses'=>$summary['full_responses']													);
	}
}
	/*echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";*/
	//$_SESSION["encuestas"] ['summary'] = $json;
	$response = array();
	$response['success'] = true;
	$response['data'] = $json;
	echo json_encode($response);

}
?>