<?php

use kartik\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\bootstrap\NavBar;
use kartik\nav\NavX;
use yii\widgets\Breadcrumbs;
use kartik\widgets\Select2;

AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/themes/kip/images/logo.png" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>


    </head>

    <body>
        
       <?php echo $this->render('nav') ?> 




        <!-- Begin page content -->
        <div class="container-fluid">
            <div class="col-md-2 sidebar">
<?php echo $this->render('side') ?>
            </div>

            <div class="col-md-10 mainbar" id="erp_form_area">
                <div class="panel panel-success">
                    <div class="panel-heading">
<?php
echo Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>  
                    </div>
                    <div class="panel-body">
                        <?= $content ?> 
                    </div>

                </div>

            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="text-muted">540 Portal</p>
            </div>
        </footer>
<?php $this->endBody() ?>
    </body>
</html>

</body>
</html>
<?php $this->endPage() ?>