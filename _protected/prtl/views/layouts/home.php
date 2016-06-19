<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

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
        <?php $this->beginBody() ?>   
        <nav class="navbar navbar-default" style="background-color: #2574A9">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img alt="logo" class="logo_image" src="http://localhost/yinoerp/themes/files/logo.png">
                    <a href="<?= Url::base(true) ?>" class="navbar-brand">inoERP</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <select class="from_array select form-control fa-select search_document_list" name="search_document_list[]"><option value="">Select</option><option selected="" value="all"> All Elements</option><option value="address"> Address</option><option value="ap_payment_header"> AP Payment</option><option value="ap_transaction_header"> AP Invoice</option><option value="ar_transaction_header"> AR Invoice</option><option value="ar_receipt_header"> AR Receipt</option><option value="mdm_bank_header"> Bank</option><option value="bc_label_format_header"> Barcode</option><option value="bom_header"> Bills Of Material</option><option value="cc_co_header"> Change Order</option><option value="ar_customer"> Customer</option><option value="gl_calendar"> GL Calendar</option><option value="gl_journal_header"> Journal</option><option value="inv_transaction"> Inventory Transactions</option><option value="item"> Item</option><option value="org"> Org</option><option value="po_header"> Purchase Order</option><option value="inv_receipt_header"> PO Receipt</option><option value="all_bom_routing_v"> Routing</option><option value="sd_so_header"> Sales Order</option><option value="sd_delivery_header"> Sales Delivery</option><option value="supplier"> Supplier</option><option value="user"> User</option></select></span> <input type="text" placeholder="Data To Search..." name="search_text" class="form-control search-element">
                                    <span class="input-group-btn">
                                        <button id="site_search_submit" type="button" class="btn btn-default">Go!</button>
                                    </span>
                                </div>
                                
                            </form>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> 
                                <?php
                                $user = \common\modules\user\models\User::findOne(Yii::$app->user->id);
                                $name = Yii::$app->user->identity->username;
                                if (is_object($user->profile)) {
                                    $name = $user->profile->fullName;
                                }
                                echo $name;
                                ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><?= Html::a('<i class="fa fa-home"></i>Home', ["/"], ['class' => 'profile-link']) ?></li>
                                <li><?= Html::a('<i class="fa fa-product-hunt"></i>My Details', ['/user/auth/profile'], ["id" => Yii::$app->user->id], ['class' => 'profile-link']) ?></li>
                                <li><?= Html::a('<i class="fa fa-print"></i>Change Password', ['/user/auth/passwd'], ['class' => 'profile-link']) ?></li>
                                <li role="separator" class="divider"></li>
                                <li><?= Html::a('<i class="fa fa-tasks"></i>Activities', ["/dashboard/activity"], ['class' => 'profile-link']) ?></li>
                                <li><?= Html::a('<i class="fa fa-bell-slash-o"></i>Notification', ["/dashboard/notification"], ['class' => 'profile-link']) ?></li>
                                <li><?= Html::a('<i class="fa fa-dashboard"> </i>Dashboard', ["/dashboard"], ['class' => 'profile-link']) ?></li>
                                <li><?= Html::a('<i class="fa fa-cog"></i> Configure', ["/dashboard/configure"], ['class' => 'profile-link']) ?></li>
                                <li role="separator" class="divider"></li>
                                <li><?= Html::a('<i class="fa fa-sign-out"></i> Logout', ['/user/auth/logout'], ['class' => 'profile-link']) ?></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>




        <!-- Begin page content -->
        <div class="container-fluid">
            <div class="col-md-2 sidebar">
                <?php echo $this->render('menu') ?>
            </div>

            <div class="col-md-10 mainbar" id="erp_form_area">
                <?= $content ?>
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