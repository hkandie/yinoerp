<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_dynamic_block_line}}".
 *
 * @property string $sys_dynamic_block_line_id
 * @property integer $dynamic_block_header_id
 * @property string $content_type
 * @property string $reference_table
 * @property string $reference_column
 * @property integer $reference_id
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysDynamicBlockLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_dynamic_block_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dynamic_block_header_id', 'created_by', 'last_update_by'], 'required'],
            [['dynamic_block_header_id', 'reference_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['content_type'], 'string', 'max' => 50],
            [['reference_table', 'reference_column', 'description'], 'string', 'max' => 256],
            [['dynamic_block_header_id', 'content_type'], 'unique', 'targetAttribute' => ['dynamic_block_header_id', 'content_type'], 'message' => 'The combination of Dynamic Block Header ID and Content Type has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_dynamic_block_line_id' => Yii::t('app', 'Sys Dynamic Block Line ID'),
            'dynamic_block_header_id' => Yii::t('app', 'Dynamic Block Header ID'),
            'content_type' => Yii::t('app', 'Content Type'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'reference_column' => Yii::t('app', 'Reference Column'),
            'reference_id' => Yii::t('app', 'Reference ID'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
