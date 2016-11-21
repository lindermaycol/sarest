<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$query=$apiparams['api']."/".$apiparams['version'];
$this->title = $query;
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-about">
    <iframe  class="mi-iframe"  src="/apispec/?<?php echo $query?>" frameborder="0" allowfullscreen></iframe>
</div>
