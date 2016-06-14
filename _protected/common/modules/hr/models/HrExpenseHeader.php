<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_expense_header}}".
 *
 * @property string $hr_expense_header_id
 * @property integer $bu_org_id
 * @property string $claim_number
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property integer $hr_employee_id
 * @property string $claim_date
 * @property string $approved_date
 * @property string $approved_by
 * @property integer $approved_by_employee_id
 * @property string $status
 * @property string $purpose
 * @property integer $expense_template_id
 * @property string $currency
 * @property string $doc_currency
 * @property string $header_amount
 * @property integer $department_id
 * @property string $reason
 * @property string $contact_details
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrExpenseHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_expense_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'hr_employee_id', 'status', 'department_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'hr_employee_id', 'approved_by_employee_id', 'expense_template_id', 'department_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['exchange_rate', 'header_amount'], 'number'],
            [['claim_date', 'approved_date', 'creation_date', 'last_update_date'], 'safe'],
            [['claim_number', 'exchange_rate_type', 'status', 'doc_currency'], 'string', 'max' => 25],
            [['approved_by'], 'string', 'max' => 100],
            [['purpose'], 'string', 'max' => 255],
            [['currency'], 'string', 'max' => 20],
            [['reason', 'contact_details'], 'string', 'max' => 256],
            [['bu_org_id', 'claim_number'], 'unique', 'targetAttribute' => ['bu_org_id', 'claim_number'], 'message' => 'The combination of Bu Org ID and Claim Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_expense_header_id' => Yii::t('app', 'Hr Expense Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'claim_number' => Yii::t('app', 'Claim Number'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'claim_date' => Yii::t('app', 'Claim Date'),
            'approved_date' => Yii::t('app', 'Approved Date'),
            'approved_by' => Yii::t('app', 'Approved By'),
            'approved_by_employee_id' => Yii::t('app', 'Approved By Employee ID'),
            'status' => Yii::t('app', 'Status'),
            'purpose' => Yii::t('app', 'Purpose'),
            'expense_template_id' => Yii::t('app', 'Expense Template ID'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'department_id' => Yii::t('app', 'Department ID'),
            'reason' => Yii::t('app', 'Reason'),
            'contact_details' => Yii::t('app', 'Contact Details'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
