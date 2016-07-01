<?php

if (Yii::$app->user->isGuest) {
   echo $this->render('wapp-login',["content"=>$content]);
} else {
    echo $this->render('wapp-home',["content"=>$content]);
}
