<?php

/*
 * 2015-03-10
 * @author Mika Ståhlberg <mika.stahlberg@interaktiva.fi>
 * https://github.com/mist-webit/yii2-materialize
 */

namespace mistwebit\materialize;

use yii\web\AssetBundle;

class MaterializeAsset extends AssetBundle
{
    public $sourcePath = '@bower/materialize/dist';
    public $css = [
        'css/materialize.min.css',
    ];
    public $js = [
        'js/materialize.min.js',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $depends = [
        'yii\web\YiiAsset',
    ];

    public function init()
    {
        parent::init();
    }

}
