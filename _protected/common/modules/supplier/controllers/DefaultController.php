<?php

namespace common\modules\supplier\controllers;

use yii\web\Controller;

/**
 * Default controller for the `supplier` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
