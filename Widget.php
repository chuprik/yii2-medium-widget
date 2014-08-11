<?php

namespace kotchuprik\medium;

use yii\helpers\Html;
use yii\helpers\Json;

class Widget extends \yii\widgets\InputWidget
{
    public $theme = 'default';

    public $settings = [];

    public $tagOptions = ['class' => 'editable'];

    public function run()
    {
        $this->tagOptions['data-input'] = '#' . $this->options['id'];
        $this->options['style'] = 'display: none;';

        $this->registerClientScripts();
        echo Html::tag('div', Html::getAttributeValue($this->model, $this->attribute), $this->tagOptions);
        echo Html::activeTextarea($this->model, $this->attribute, $this->options);
    }

    protected function registerClientScripts()
    {
        $view = $this->getView();
        $asset = Asset::register($view);
        $asset->theme = $this->theme;

        $js = [];
        if (empty($this->settings)) {
            $js[] = 'var editor = new MediumEditor(".editable");';
        } else {
            $js[] = 'var editor = new MediumEditor(".editable", ' . Json::encode($this->settings) . ');';
        }
        $js[] = '$(".editable").on("input", function() { var $this = $(this); $($this.data("input")).val($this.html()); });';

        $view->registerJs(implode(PHP_EOL, $js));
    }
}
