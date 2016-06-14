<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_payroll}}".
 *
 * @property string $hr_payroll_id
 * @property string $payroll
 * @property string $period_type
 * @property string $start_date
 * @property string $end_date
 * @property string $description
 * @property string $payment_method_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPayroll extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_payroll}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payroll', 'period_type', 'start_date', 'end_date', 'payment_method_id', 'created_by', 'last_update_by'], 'required'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['payroll'], 'string', 'max' => 100],
            [['period_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['payment_method_id'], 'string', 'max' => 25],
            [['payroll'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_payroll_id' => Yii::t('app', 'Hr Payroll ID'),
            'payroll' => Yii::t('app', 'Payroll'),
            'period_type' => Yii::t('app', 'Period Type'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'description' => Yii::t('app', 'Description'),
            'payment_method_id' => Yii::t('app', 'Payment Method ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
