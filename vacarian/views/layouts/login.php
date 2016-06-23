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
        <!-- end topbar -->
        <div id="topbar" class="topbar clearfix">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="social-icons">
                        <span><a class="clickable erp_dashborad" href="http://localhost/inoerp/form.php?class_name=user_dashboard_v&mode=2" title="ERP Dashboard"><i class="fa fa-dashboard"></i> ERP Dashboard </a></span>     
                    </div><!-- end social icons -->

                </div><!-- end columns -->
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="topmenu">
                        <div class="topbar-login">
                            <?= yii\helpers\Html::a("Login/Register", ["/user/auth/login"], ["class" => "btn btn-default btn-sm"]) ?>
                        </div>

                    </div><!-- end top menu -->
                    <div class="callus">
                    </div><!-- end callus -->
                </div><!-- end columns -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <header id="header-style-1">
            <div class="container">
                <nav class="navbar yamm navbar-default">
                    <div class="navbar-header">
                        <?= yii\helpers\Html::img("/files/logo.png", ["class" => "logo_image", "alt" => "logo"]) ?>
                        <img src="http://localhost/inoerp/files/logo.png" class="logo_image" alt="logo"/>
                        <?= yii\helpers\Html::a("inoERP", ["/"], ["class" => "navbar-brand"]) ?>
                    </div><!-- end navbar-header -->
                    <div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><?= yii\helpers\Html::a("Home<div class=\"arrow-up\"></div>", ["/"], ["class" => "navbar-brand"]) ?></li>
                        </ul><!-- end navbar-nav -->
                    </div><!-- #navbar-collapse-1 -->			
                </nav><!-- end navbar yamm navbar-default -->
            </div><!-- end container -->
        </header><!-- end header-style-1 -->


        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <?= $content ?>
            </div>
            <div class="col-md-2"></div>
        </div> 

        <!--footer content-->
        <div id="comment_form" class="none">
        </div>

        <div class="make-bg-full">
            <div class="calloutbox-full-mini nocontainer">
                <div class="long-twitter">
                </div>
            </div><!-- end calloutbox -->
        </div><!-- make bg -->

        <div id="footer-style-1">
            <div class="container">
                <div id="footer_top"></div>
            </div>
        </div>
        <div id="copyrights">
            <div class="container">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="copyright-text">
                        <p>
                            Copyright @ 2016    </p>
                    </div><!-- end copyright-text -->
                </div><!-- end widget -->
                <div class="col-lg-7 col-md-6 col-sm-12 clearfix">
                    <div class="footer-menu">
                        <ul class="menu">
                            <li class="active"><a href="#">Terms of Use</a></li>
                            <li><a href="#">Cookie Preferences</a></li>

                        </ul>
                    </div>
                </div><!-- end large-7 --> 
            </div><!-- end container -->
        </div><!-- end copyrights -->

        <input type="hidden" id="home_url" name="home_url[]" value="http://localhost/inoerp/" class="hidden home_url" > <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-48829329-1', 'auto');
            ga('send', 'pageview');

        </script>            
    </body>
</html>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>