<?php
use yii\helpers\Url;

$this->title = "Home";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="row">
        <a href="<?=Url::toRoute('portal/branches/index')?>" class="col-md-2 col-lg-2 center">
            <i class="fa fa-building fa-5x"></i> <br/>Branches
        </a>
        <a href="<?=Url::toRoute('portal/station/index')?>" class="col-md-2 col-lg-2">
            <i class="fa fa-plane fa-5x"></i> <br/>Stations
        </a>
        <a href="<?=Url::toRoute('portal/product-detail/index')?>" class="col-md-2 col-lg-2">
            <i class="fa fa-plane fa-5x"></i> <br/>Products
        </a>

    </div>
</div>