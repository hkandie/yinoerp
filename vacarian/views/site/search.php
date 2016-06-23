<?php

use kartik\form\ActiveForm;
use kartik\builder\Form;
use yii\helpers\Html;
?>

    <div class="row" id="new-qoute">
<?php if(isset($saved)){?>
        <div class="col-md-12 alert alert-success ">
        Here is your short list 
        </div>
<?php }?>
        <?php
        $users = $dataProvider->getModels();
        foreach ($users as $profile) {
            //$profile = $user->profile;
            ?>
            <div class="col-md-3">
                <div class="row" style="padding: 2px">

                    <div class="thumbnail">
                        <?= Html::img(Yii::$app->request->baseUrl . '/uploads/user_images/' . $profile->avatar) ?>
                        <div class="caption">
                            <hr/>
                           
                            <h3><?= $profile->first_name . ' ' . $profile->last_name ?></h3>
                            <p>Subject: <?= $profile->note ?></p>
                            <p>Price: <?= Yii::$app->formatter->format($profile->min_hire_cost, ['currency']) ?></p>
                            <p>Location: <?= $profile->location ?></p>
                            <p>Level: <?= $profile->location ?></p>
                            <p><input type="checkbox" name="userid[]" class="form-group" value="<?= $profile->user_id ?>"  <?=  in_array($profile->user_id,  Yii::$app->session->get('userid'))?"checked":""?> > Add to Short List</p>
                        </div>
                    </div>

                </div>
            </div>
        <?php }
        ?>
        <hr/>
        <div class="col-md-12">
            <?php if(!isset($saved)){?>
            <span class="btn btn-block btn-success" onclick="shortlist()">Short List</span>
            <?php }?>
        </div>
    </div>
