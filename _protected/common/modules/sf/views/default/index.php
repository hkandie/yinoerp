<?php

use common\modules\path\models\Path;
use yii\helpers\Html;
use yii\helpers\Url;

$module = "sf";

$path = Path::$icon_stmt_a[$module];
$this->title = $path["description"];

$parent_path = Path::findOne(["module_code" => $module, "parent_id" => null]);
$childs = Path::findAll(["parent_id" => $parent_path->path_id]);
?>
<div class="tr-default-index">
    <div id="content">
        <div id="structure">
            <div id="path_by_module">
                <div class="panel panel-ino-light-grey">
                    <div class="panel-heading dashboard">
                        <ul class="inline-list">
                            <li title="My Dashboard"><a href="<?=$module?>/<?= Url::base() ?>" class="ajax-link"> Dashboard  &gt;&gt; </a></li>
                            <li class="<?=$path["description"]?> " title="<?=$path["description"]?>"><a href="<?=Html::a($module)?>" class="ajax-link"> <?=$path["description"]?></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <ul class="child_menu">
                            <?php foreach ($childs as $child_p) {
                                ?>
                            <li><a href="<?=$module?>/<?=Url::to($child_p->path_link) ?>" class="list-header">&nbsp;
                                        <i class="fa <?= $path["div_class"] ?>"></i> &nbsp; <?= $child_p->description ?></a>

                                    <?php
                                    $other_child_paths = Path::findAll(["parent_id" => $child_p->path_id]);
                                    foreach ($other_child_paths as $child_paths_oth) {
                                        ?>
                                        <ul class="list-line-ul">
                                            <li class="expandable  <?=$child_paths_oth->description?>" title="<?=$child_paths_oth->description?>">&nbsp;&nbsp;
                                                <a href="<?=$module?>/<?=Url::to($child_paths_oth->path_link) ?>"><i class="fa fa-dot-circle-o"></i>&nbsp;<?=$child_paths_oth->description?></a>
                                            </li>
                                        </ul>
                                        <?php
                                    }
                                }
                                ?>



                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--   end of structure-->
        </div>
    </div>
</div>
