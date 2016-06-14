<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_approval_object}}".
 *
 * @property string $hr_approval_object_id
 * @property string $object_code
 * @property string $object_name
 * @property string $description
 * @property string $value_type
 * @property string $object_value
 * @property string $return_type
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrApprovalObject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_approval_object}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object_code', 'object_name', 'created_by', 'last_update_by'], 'required'],
            [['object_value'], 'string'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['object_code', 'value_type', 'return_type'], 'string', 'max' => 25],
            [['object_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['object_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_approval_object_id' => Yii::t('app', 'Hr Approval Object ID'),
            'object_code' => Yii::t('app', 'Object Code'),
            'object_name' => Yii::t('app', 'Object Name'),
            'description' => Yii::t('app', 'Description'),
            'value_type' => Yii::t('app', 'Value Type'),
            'object_value' => Yii::t('app', 'Object Value'),
            'return_type' => Yii::t('app', 'Return Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
