<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-gentelella/blob/master/LICENSE
 * @link http://gentelella.yiister.ru
 */

namespace yiister\gentelella\assets;

use yii\web\AssetBundle;

class VendorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/gentelella/vendor/bower';
    public $css = [
        'nprogress/nprogress.css',
        'iCheck/skins/flat/green.css',
        'google-code-prettify/bin/prettify.min.css',
        'select2/dist/css/select2.min.css',
        'switchery/dist/switchery.min.css',
        'starrr/dist/starrr.css',
        'bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
        'jqvmap/dist/jqvmap.min.css',
        'bootstrap-daterangepicker/daterangepicker.css',
        'normalize-css/normalize.css',
        'ion.rangeSlider/css/ion.rangeSlider.css',
        'ion.rangeSlider/css/ion.rangeSlider.skinFlat.css',
        'mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css',
        'cropper/dist/cropper.min.css',
        'dropzone/dist/min/dropzone.min.css',
        'pnotify/dist/pnotify.css',
        'pnotify/dist/pnotify.buttons.css',
        'pnotify/dist/pnotify.nonblock.css',
        'fullcalendar/dist/fullcalendar.min.css',
    	'fullcalendar/dist/fullcalendar.print.css',
    	'datatables.net-bs/css/dataTables.bootstrap.min.css',
    	'datatables.net-buttons-bs/css/buttons.bootstrap.min.css',
    	'datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css',
    	'datatables.net-responsive-bs/css/responsive.bootstrap.min.css',
    	'datatables.net-scroller-bs/css/scroller.bootstrap.min.css'
    ];
    public $js = [
    	'fastclick/lib/fastclick.js',
    	'nprogress/nprogress.js',
    	'validator/validator.js',
    	'Chart.js/dist/Chart.min.js',
    	'jquery-sparkline/dist/jquery.sparkline.min.js',
    	'jquery.easy-pie-chart/dist/jquery.easypiechart.min.js',
    	'raphael/raphael.min.js',
    	'morris.js/morris.min.js',
    	'gauge.js/dist/gauge.min.js',
    	'iCheck/icheck.min.js',
    	'skycons/skycons.js',
    	'Flot/jquery.flot.js',
    	'Flot/jquery.flot.pie.js',
    	'Flot/jquery.flot.time.js',
    	'Flot/jquery.flot.stack.js',
    	'Flot/jquery.flot.resize.js',
    	'flot.orderbars/js/jquery.flot.orderBars.js',
    	'flot-spline/js/jquery.flot.spline.min.js',
    	'flot.curvedlines/curvedLines.js',
    	'DateJS/build/date.js',
    	'moment/min/moment.min.js',
    	'jqvmap/dist/jquery.vmap.js',
    	'jqvmap/dist/maps/jquery.vmap.world.js',
    	'jqvmap/dist/maps/jquery.vmap.usa.js,',
    	'jqvmap/examples/js/jquery.vmap.sampledata.js',
    	'moment/min/moment.min.js',
    	'bootstrap-daterangepicker/daterangepicker.js',
    	'bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js',
    	'jquery.hotkeys/jquery.hotkeys.js',
    	'google-code-prettify/src/prettify.js',
    	'jquery.tagsinput/src/jquery.tagsinput.js',
    	'switchery/dist/switchery.min.js',
    	'select2/dist/js/select2.full.min.js',
    	'parsleyjs/dist/parsley.min.js',
    	'autosize/dist/autosize.min.js',
    	'devbridge-autocomplete/dist/jquery.autocomplete.min.js',
    	'starrr/dist/starrr.js',
    	'ion.rangeSlider/js/ion.rangeSlider.min.js',
    	'mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js',
    	'jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js',
    	'jquery-knob/dist/jquery.knob.min.js',
    	'cropper/dist/cropper.min.js',
    	'jQuery-Smart-Wizard/js/jquery.smartWizard.js',
    	'dropzone/dist/min/dropzone.min.js',
    	'pnotify/dist/pnotify.js',
    	'pnotify/dist/pnotify.buttons.js',
    	'pnotify/dist/pnotify.nonblock.js',
    	'bootstrap-progressbar/bootstrap-progressbar.min.js',
    	'fullcalendar/dist/fullcalendar.min.js',
    	'datatables.net/js/jquery.dataTables.min.js',
    	'datatables.net-bs/js/dataTables.bootstrap.min.js',
    	'datatables.net-buttons/js/dataTables.buttons.min.js',
    	'datatables.net-buttons-bs/js/buttons.bootstrap.min.js',
    	'datatables.net-buttons/js/buttons.flash.min.js',
    	'datatables.net-buttons/js/buttons.html5.min.js',
    	'datatables.net-buttons/js/buttons.print.min.js',
    	'datatables.net-fixedheader/js/dataTables.fixedHeader.min.js',
    	'datatables.net-keytable/js/dataTables.keyTable.min.js',
    	'datatables.net-responsive/js/dataTables.responsive.min.js',
    	'datatables.net-responsive-bs/js/responsive.bootstrap.js',
    	'datatables.net-scroller/js/datatables.scroller.min.js',
    	'jszip/dist/jszip.min.js',
    	'pdfmake/build/pdfmake.min.js',
    	'pdfmake/build/vfs_fonts.js',
    	'echarts/dist/echarts.min.js',
    	'echarts/map/js/world.js',
    	'datetime-moment/datetime-moment.js'
    ];

}
