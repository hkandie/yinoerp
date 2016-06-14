<?php

namespace common\modules\block\models;

use Yii;

/**
 * This is the model class for table "{{%block_content}}".
 *
 * @property integer $block_content_id
 * @property integer $block_id
 * @property string $info
 * @property string $content
 * @property integer $content_php_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BlockContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%block_content}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['block_id', 'content', 'created_by', 'last_update_by'], 'required'],
            [['block_id', 'content_php_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['content'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['info'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'block_content_id' => Yii::t('app', 'Block Content ID'),
            'block_id' => Yii::t('app', 'Block ID'),
            'info' => Yii::t('app', 'Info'),
            'content' => Yii::t('app', 'Content'),
            'content_php_cb' => Yii::t('app', 'Content Php Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
