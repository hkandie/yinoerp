<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_cp_assignment_line}}".
 *
 * @property integer $qa_cp_assignment_line_id
 * @property integer $qa_cp_assignment_header_id
 * @property integer $qa_cp_header_id
 * @property string $trigger_name
 * @property string $trigger_condition
 * @property string $value_from
 * @property string $value_to
 * @property string $description
 * @property integer $enabled_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class QaCpAssignmentLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_cp_assignment_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qa_cp_assignment_header_id', 'qa_cp_header_id', 'trigger_name', 'trigger_condition', 'value_from', 'created_by', 'last_update_by'], 'required'],
            [['qa_cp_assignment_header_id', 'qa_cp_header_id', 'enabled_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['trigger_name', 'value_from', 'value_to'], 'string', 'max' => 25],
            [['trigger_condition'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_cp_assignment_line_id' => Yii::t('app', 'Qa Cp Assignment Line ID'),
            'qa_cp_assignment_header_id' => Yii::t('app', 'Qa Cp Assignment Header ID'),
            'qa_cp_header_id' => Yii::t('app', 'Qa Cp Header ID'),
            'trigger_name' => Yii::t('app', 'Trigger Name'),
            'trigger_condition' => Yii::t('app', 'Trigger Condition'),
            'value_from' => Yii::t('app', 'Value From'),
            'value_to' => Yii::t('app', 'Value To'),
            'description' => Yii::t('app', 'Description'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
