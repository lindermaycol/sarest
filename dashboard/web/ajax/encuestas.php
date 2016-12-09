<?php
// instanciate a new client
include_once '../../../vendor/functions/general.php';
if (isset($_GET['type']))
{

	$TitleText=array ('text' => 'Graph title','subtext' => 'Graph Sub-text');
	$Axis=array('xAxis'=>'category','yAxis'=>'value');
	$SeriesChart=array ('parcial'=>'bar','completas'=>'bar');
	$Toolbox=array('magicType'=>array ('line' => 'Line','bar' => 'Bar','stack' => 'Stack','tiled' => 'Tiled'),'restore'=>'Restaurar','saveAsImage'=>'Guardar como imagen');
	$SeriesChoosed=array('incomplete_responses','completed_responses');
	$AxisCategory=array('axi'=>array_search('category',$Axis),'value'=>'surveyls_title');
	
	session_start($TitleText);
	if (!isset($_SESSION["encuestas"] ['summary'])){ 
	   	echo "no existe";
	}else{ 
		$summary=$_SESSION["encuestas"] ['summary'];
		$chart=FormatChart($TitleText,$Axis,$SeriesChart,$Toolbox);
		$chart=LoadDataChart($chart,$summary,$AxisCategory,$SeriesChoosed);
		echo json_encode ($chart);
	}
}
else
{
	include_once '../../../vendor/autoload.php';
	define( 'LS_BASEURL_SENCICO', 'http://app.sencico.gob.pe/prd2/seidi/index.php'); 
	define( 'LS_USER_SENCICO', 'admin' );
	define( 'LS_PASSWORD_SENCICO', '4con4kej' );
	ini_set('max_execution_time', 60);
	$myJSONRPCClient = new \org\jsonrpcphp\JsonRPCClient( LS_BASEURL_SENCICO.'/admin/remotecontrol' );

	// receive session key
	$sessionKey= $myJSONRPCClient->get_session_key( LS_USER_SENCICO, LS_PASSWORD_SENCICO );
	// get all responses
	//$users=$myJSONRPCClient->list_users($sessionKey);
	/*$groups=$myJSONRPCClient->get_site_settings($sessionKey,'sitename');
	echo "<pre>";
	print_r($groups);
	echo "</pre>";	
	exit();*/
	$SURVEYS = $myJSONRPCClient->list_surveys($sessionKey);
	$filterBy = 'Y'; // Si la encuesta esta activa.

	$SURVEYS = array_filter($SURVEYS , function ($var) use ($filterBy) {
		return ($var['active'] == $filterBy);
	});

	/*echo "<pre>";
	print_r($_GET);
	echo "</pre>";*/
	//session_destroy();
	session_start();
	$_SESSION["encuestas"] ['summary']=array();
	foreach ($SURVEYS as $key => $survey)
	{
		$summary=$myJSONRPCClient->get_summary($sessionKey,$survey['sid'],'all');
		/*echo "<pre>";
		echo $survey['surveyls_title'];
		echo "<br>";
		echo $survey['sid'];
	print_r($summary);
	echo "</pre>";*/
	if ($summary['full_responses']>0)
	{

		$properties=$myJSONRPCClient->get_survey_properties($sessionKey,$survey['sid'],array('datecreated'));
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

//$_SESSION["encuestas"] ['summary'] = $json;
$response = array();
$response['success'] = true;
$response['data'] = $json;
echo json_encode($response);

}
?>