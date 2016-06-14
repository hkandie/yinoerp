<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_import_claim_v".
 *
 * @property string $claim_number
 * @property string $hr_expense_header_id
 * @property integer $bu_org_id
 * @property integer $hr_employee_id
 * @property string $claim_date
 * @property string $status
 * @property string $purpose
 * @property string $doc_currency
 * @property integer $department_id
 * @property string $reason
 * @property string $currency
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property string $header_amount
 * @property integer $supplier_id
 * @property string $first_name
 * @property string $last_name
 * @property string $identification_id
 */
class ApImportClaimV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_import_claim_v';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_expense_header_id', 'bu_org_id', 'hr_employee_id', 'department_id', 'supplier_id'], 'integer'],
            [['bu_org_id', 'hr_employee_id', 'status', 'department_id', 'first_name', 'last_name'], 'required'],
            [['claim_date'], 'safe'],
            [['exchange_rate', 'header_amount'], 'number'],
            [['claim_number', 'status', 'doc_currency', 'exchange_rate_type'], 'string', 'max' => 25],
            [['purpose'], 'string', 'max' => 255],
            [['reason'], 'string', 'max' => 256],
            [['currency'], 'string', 'max' => 20],
            [['first_name', 'last_name', 'identification_id'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'claim_number' => Yii::t('app', 'Claim Number'),
            'hr_expense_header_id' => Yii::t('app', 'Hr Expense Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'claim_date' => Yii::t('app', 'Claim Date'),
            'status' => Yii::t('app', 'Status'),
            'purpose' => Yii::t('app', 'Purpose'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'department_id' => Yii::t('app', 'Department ID'),
            'reason' => Yii::t('app', 'Reason'),
            'currency' => Yii::t('app', 'Currency'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'identification_id' => Yii::t('app', 'Identification ID'),
        ];
    }
}
