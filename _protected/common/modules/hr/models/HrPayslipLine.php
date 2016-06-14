<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_payslip_line}}".
 *
 * @property string $hr_payslip_line_id
 * @property integer $hr_payslip_header_id
 * @property integer $hr_compensation_element_id
 * @property string $element_value
 * @property string $period
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPayslipLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_payslip_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_payslip_header_id', 'hr_compensation_element_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hr_payslip_header_id', 'hr_compensation_element_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['element_value'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['period'], 'string', 'max' => 50],
            [['hr_payslip_header_id', 'hr_compensation_element_id'], 'unique', 'targetAttribute' => ['hr_payslip_header_id', 'hr_compensation_element_id'], 'message' => 'The combination of Hr Payslip Header ID and Hr Compensation Element ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_payslip_line_id' => Yii::t('app', 'Hr Payslip Line ID'),
            'hr_payslip_header_id' => Yii::t('app', 'Hr Payslip Header ID'),
            'hr_compensation_element_id' => Yii::t('app', 'Hr Compensation Element ID'),
            'element_value' => Yii::t('app', 'Element Value'),
            'period' => Yii::t('app', 'Period'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
