<?php

use yii\helpers\Url;
use common\modules\block\models\Block;

?>
                            <ul class="column three_column">
                                <li>
                                    <h2>Notifications</h2>
                                    <?php
                                   // $block_i = Block::findOne('55');
//                                    if ($block_i->reference_table === 'block_content') {
//                                        $block_content_details = BlockContent::findOne($block_id);
//                                        $block_content = $block_content_details->content;
//                                    } else {
//                                        $class_containg_block = new $block_i->reference_table;
//                                        $method_name = $block_i->name . '_block';
//                                        $parameters['block_id'] = $block_i->block_id;
//                                        $block_content = call_user_func(array($class_containg_block, $method_name), $parameters);
//                                    }
                                    ?>
                                </li>
                                <li>
                                    <h2>Recent Comments</h2>
                                    <?php
                                    //$block_i = Block::findOne('52');
//                                    if ($block_i->reference_table === 'block_content') {
//                                        $block_content_details = BlockContent::findOne(52);
//                                        $block_content = $block_content_details->content;
//                                    } else {
//                                        $class_containg_block = new $block_i->reference_table;
//                                        $method_name = $block_i->name . '_block';
//                                        $parameters['block_id'] = $block_i->block_id;
//                                        $block_content = call_user_func(array($class_containg_block, $method_name), $parameters);
//                                    }
                                    ?>
                                </li>
                                <li>
                                    <a title='Update Favourite' href="<?php echo Url::base() ?>form.php?class_name=user_favourite&mode=9"><h2>Favourites 
                                            <i class="fa fa-edit"> </i></h2></a>
                                    <?php
                                    // echo $fav->show_currentUser_fav();
                                    ?>
                                </li>
                            </ul>