<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_secondary_field}}".
 *
 * @property integer $sys_secondary_field_id
 * @property string $field_name
 * @property string $sys_field_name
 * @property string $description
 * @property string $field_type
 * @property integer $field_length
 * @property string $display_type
 * @property integer $active_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysSecondaryField extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_secondary_field}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['field_name', 'sys_field_name', 'created_by', 'last_update_by'], 'required'],
            [['field_length', 'active_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['field_name', 'sys_field_name', 'field_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['display_type'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_secondary_field_id' => Yii::t('app', 'Sys Secondary Field ID'),
            'field_name' => Yii::t('app', 'Field Name'),
            'sys_field_name' => Yii::t('app', 'Sys Field Name'),
            'description' => Yii::t('app', 'Description'),
            'field_type' => Yii::t('app', 'Field Type'),
            'field_length' => Yii::t('app', 'Field Length'),
            'display_type' => Yii::t('app', 'Display Type'),
            'active_cb' => Yii::t('app', 'Active Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
