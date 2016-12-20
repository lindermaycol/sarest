<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Indicadores Encuesta';
$this->params['breadcrumbs'][] = ['label' => 'Indicadores', 'url' => ['indicadores']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="" id="containerchart">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Encuestas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      A continuación se muestra la lista de las encuesta que fueron realizadas y sus respectivos indicadores.
                    </p>
                    <table id="ListSurveys" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Titulo</th>
                          <th>Creado</th>
                          <th>Parcial</th>
                          <th>Completo</th>
                          <th>Total</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="chartsblock">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bar Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="mainb" style="height:350px;"></div>
                  </div>
                </div>
              </div>
            </div>
</div>
