<?php

/* @var $this yii\web\View */

$this->title = 'SENCICO Apis RESTs';
?>
<!-- Panel de acceso a sistemas y aplicaciones -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Panel de acceso a sistemas y aplicaciones</h2>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-apps"></i>
                      <i class="fa fa-tachometer fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>PRADSIS</h4>
                <p>Sistema de Proyectos y Adquisiciones</p>
                <a href="http://ultron.sanborja.sencico.gob.pe/prd/waProyectos/" target="_blank" class="btn btn-primary">Acceder</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-apps"></i>
                      <i class="fa fa-pie-chart fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>SEIDI</h4>
                <p>Sistema de Encuestas de I+D+I de SENCICO</p>
                <a href="http://seidi/index.php/admin/authentication/sa/login" target="_blank" class="btn btn-primary">Acceder</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-apps"></i>
                      <i class="fa fa-file-text fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>SITRADOC</h4>
                <p>Sistema de Trámite Documentario de SENCICO</p>
                <a href="http://ultron.sanborja.sencico.gob.pe/prd/wsTramite/" target="_blank" class="btn btn-primary">Acceder</a>
            </div>
        </div>
    </div> 
</div>
<!-- Panel interfaces de programación de aplicaciones - APIs -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Panel interfaces de programación de aplicaciones - APIs</h2>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-tachometer fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>PRADSIS</h4>
                <p>Servicios web del Sistema de Proyectos y Adquisiciones.</p>
                <a href="index.php?r=site/apispec&api=apipradsis&version=v1" target="_self" class="btn btn-primary">Acceder</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-pie-chart fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>SEIDI</h4>
                <p>Servicios web del Sistema de Encuestas de I+D+I.</p>
                <a href="#" class="btn btn-primary">Acceder</a>
            </div>
        </div>
    </div> 
</div>

