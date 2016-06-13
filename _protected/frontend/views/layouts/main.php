<?php

use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

if (Yii::$app->user->isGuest) {
   echo $this->render('home',["content"=>$content]);
} else {
    echo $this->render('home',["content"=>$content]);
}
