<?php

use yii\helpers\Html;
use frontend\assets\LoginAsset; 

LoginAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/images/rudrasoftech_favicon.png" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
<?php $this->head() ?>


        <script src="js/prefixfree.min.js"></script>


    </head>

    <body>

        <div class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div>540 <span>Portal</span></div>
        </div>
        <br>
        <div class="login">
<?= $content ?>
        </div>






    </body>
</html>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>