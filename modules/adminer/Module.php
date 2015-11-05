<?php

namespace app\modules\adminer;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\adminer\controllers';

    public function init()
    {
        parent::init();

        $this->defaultRoute = 'adminer';
    }
}
