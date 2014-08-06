<?php

namespace kotchuprik\Medium;

class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/kotchuprik/yii2-medium-widget/assets';

    public $css = ['css/medium-editor.min.css'];

    public $js = ['js/medium-editor.min.js'];

    public $theme = 'default';

    public function registerAssetFiles($view)
    {
        $this->css[] = 'css/themes/' . $this->theme . '.min.css';
        parent::registerAssetFiles($view);
    }
}
