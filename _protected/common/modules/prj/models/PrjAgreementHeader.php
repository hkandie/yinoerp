<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_agreement_header}}".
 *
 * @property integer $prj_agreement_header_id
 * @property integer $bu_org_id
 * @property string $agreement_type
 * @property string $agreement_number
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $admin_employee_id
 * @property string $description
 * @property integer $payment_term_id
 * @property string $start_date
 * @property string $end_date
 * @property string $header_amount
 * @property string $currency
 * @property string $doc_currency
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property integer $r_hard_limt_cb
 * @property integer $i_hard_limt_cb
 * @property integer $advanced_required_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjAgreementHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_agreement_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'ar_customer_id', 'ar_customer_site_id', 'admin_employee_id', 'payment_term_id', 'r_hard_limt_cb', 'i_hard_limt_cb', 'advanced_required_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['header_amount', 'exchange_rate'], 'number'],
            [['agreement_type', 'agreement_number', 'currency', 'doc_currency', 'exchange_rate_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_agreement_header_id' => Yii::t('app', 'Prj Agreement Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'agreement_type' => Yii::t('app', 'Agreement Type'),
            'agreement_number' => Yii::t('app', 'Agreement Number'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'admin_employee_id' => Yii::t('app', 'Admin Employee ID'),
            'description' => Yii::t('app', 'Description'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'r_hard_limt_cb' => Yii::t('app', 'R Hard Limt Cb'),
            'i_hard_limt_cb' => Yii::t('app', 'I Hard Limt Cb'),
            'advanced_required_cb' => Yii::t('app', 'Advanced Required Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
