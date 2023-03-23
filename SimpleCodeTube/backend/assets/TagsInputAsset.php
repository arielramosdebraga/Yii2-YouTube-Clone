<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class TagsInputAsset extends AssetBundle
{
    public $basepath = '@webroot/tagsinput';
    public $baseUrl = '@web/tagsinput';
    public $css = [
        'bootstrap-tagsinput.css',
        'bootstrap-icons.css'
    ];
    
    public $js = [
        'bootstrap-tagsinput.js'
    ];

    public $depends = [
        JqueryAsset::class
    ];
}