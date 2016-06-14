<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_dynamic_block_header}}".
 *
 * @property string $sys_dynamic_block_header_id
 * @property integer $block_id
 * @property string $name
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysDynamicBlockHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_dynamic_block_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['block_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['block_id', 'name'], 'unique', 'targetAttribute' => ['block_id', 'name'], 'message' => 'The combination of Block ID and Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_dynamic_block_header_id' => Yii::t('app', 'Sys Dynamic Block Header ID'),
            'block_id' => Yii::t('app', 'Block ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
