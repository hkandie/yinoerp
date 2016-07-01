<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\widgets\Breadcrumbs;

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

        <header id="header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-8 pull-right">
                            <div class="social">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                                <div class="join_us">
                                    <div class="actions">
                                        <span class="sign-action"><?=  Html::a("Log in",  Url::base().'/user/auth/login',["options"=>["class"=>"fa fa-signin"]])?></span>
                                        <span class="sign-action"><?=  Html::a("Register",  Url::base().'/user/auth/register',["options"=>["class"=>"fa fa-signup"]])?></span>
                                    </div>
                                    <div class="search">
                                        <form role="form">
                                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                            <i class="fa fa-search"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->

            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?=Yii::$app->request->baseUrl?>"><img src="<?php echo Yii::$app->request->baseUrl; ?>/themes/kip/images/logo.png" alt="logo"></a>
                    </div>

                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?=Yii::$app->request->baseUrl?>">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Open Office<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="pricing.html">Writer</a></li>
                                    <li><a href="blog-item.html">Calc</a></li>
                                    <li><a href="shortcodes.html">Impress</a></li>
                                    <li><a href="shortcodes.html">Draw</a></li>
                                    <li><a href="shortcodes.html">Base</a></li>
                                    <li><a href="shortcodes.html">Math</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Apps Index<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/kados/index.html">Kados</a></li>	
                                    <li><a href="/webzash/index.html">WebZash</a></li>
                                    <li><a href="/kanboard/index.html">Kanboard</a></li>						
                                    <li><a href="/zentao/index.html">Zentao PMS</a></li>						
                                </ul>
                            </li>

                            <li><a href="forum.html">Forum</a></li>														
                            <li><a href="contactus.html">Contact Us</a></li>                        
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->

        </header>

        <?php
        echo Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]);
        ?>  

        <?= $content ?> 


        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2016 Wappsolute</a>. All Rights Reserved.
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a href="termofuse.html">Term of use</a></li>
                            <li><a href="privacystatement">Privacy Statement</a></li>
                            <li><a href="faq">Faq</a></li>
                            <li><a href="contactus.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <?php $this->endBody() ?>
    </body>
</html>

</body>
</html>
<?php $this->endPage() ?>