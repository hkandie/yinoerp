<?php

use yii\helpers\Html;

/**
 * @var \yii\web\View $this
 * @var \yii\mail\BaseMessage $content
 */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <style type="text/css">
            .box_border{
                border:1px solid #4596C9;
                padding:10px;
                width:100%; 

            }
            .app_name{	
                font-size:22px;
                color:#ff4001;
                font-weight:bold;
                float:left;
                margin: 30px 0 0 15px;
            }

        </style>
    </head>
    <body>
        <div class="box_border">
            <?php $this->beginBody() ?>
            <?= $content ?>
            <?php $this->endBody() ?>
        </div>
        <div class="app_name">
            <hr/>
            <?=Yii::$app->name?>
        </div>
    </body>
</html>
<?php $this->endPage() ?>
