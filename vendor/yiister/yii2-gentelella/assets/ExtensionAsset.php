<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace yiister\gentelella\assets;

use yii\web\AssetBundle;

class ExtensionAsset extends AssetBundle
{
    public $sourcePath = '@yiister/gentelella/assets/src';
    public $js = [
        'js/extension.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    /*
    $this->registerJsFile(Yii::$app->request->baseUrl.'/js/tablasdinamicas.js',
 [  'depends' => [yii\web\JqueryAsset::className()],
  'position' => \yii\web\View::POS_END
  ]);
    */
}
