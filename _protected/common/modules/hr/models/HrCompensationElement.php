<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_compensation_element}}".
 *
 * @property string $hr_compensation_element_id
 * @property string $element_type
 * @property string $start_date
 * @property string $element_name
 * @property string $classification
 * @property string $description
 * @property string $category
 * @property string $end_date
 * @property integer $priority
 * @property integer $recurring_cb
 * @property string $deduction_rule
 * @property string $calculation_rule
 * @property integer $separate_check_cb
 * @property string $frequency_months
 * @property integer $standard_link_cb
 * @property string $deduction_start_rule
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrCompensationElement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_compensation_element}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['priority', 'recurring_cb', 'separate_check_cb', 'standard_link_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['created_by', 'last_update_by'], 'required'],
            [['element_type', 'classification', 'category', 'deduction_rule', 'deduction_start_rule', 'status'], 'string', 'max' => 25],
            [['element_name'], 'string', 'max' => 50],
            [['description', 'frequency_months'], 'string', 'max' => 256],
            [['calculation_rule'], 'string', 'max' => 100],
            [['element_type', 'element_name'], 'unique', 'targetAttribute' => ['element_type', 'element_name'], 'message' => 'The combination of Element Type and Element Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_compensation_element_id' => Yii::t('app', 'Hr Compensation Element ID'),
            'element_type' => Yii::t('app', 'Element Type'),
            'start_date' => Yii::t('app', 'Start Date'),
            'element_name' => Yii::t('app', 'Element Name'),
            'classification' => Yii::t('app', 'Classification'),
            'description' => Yii::t('app', 'Description'),
            'category' => Yii::t('app', 'Category'),
            'end_date' => Yii::t('app', 'End Date'),
            'priority' => Yii::t('app', 'Priority'),
            'recurring_cb' => Yii::t('app', 'Recurring Cb'),
            'deduction_rule' => Yii::t('app', 'Deduction Rule'),
            'calculation_rule' => Yii::t('app', 'Calculation Rule'),
            'separate_check_cb' => Yii::t('app', 'Separate Check Cb'),
            'frequency_months' => Yii::t('app', 'Frequency Months'),
            'standard_link_cb' => Yii::t('app', 'Standard Link Cb'),
            'deduction_start_rule' => Yii::t('app', 'Deduction Start Rule'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
