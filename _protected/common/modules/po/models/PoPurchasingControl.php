<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_purchasing_control}}".
 *
 * @property string $po_purchasing_control_id
 * @property integer $org_id
 * @property integer $payment_term_id
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property string $po_approval_hierarchy
 * @property string $req_approval_hierarchy
 * @property integer $tax_ac_id
 * @property integer $ef_id
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoPurchasingControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_purchasing_control}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'tax_ac_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'payment_term_id', 'ship_to_id', 'bill_to_id', 'tax_ac_id', 'ef_id', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['po_approval_hierarchy', 'req_approval_hierarchy'], 'string', 'max' => 25],
            [['rev_enabled'], 'string', 'max' => 50],
            [['org_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_purchasing_control_id' => Yii::t('app', 'Po Purchasing Control ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'po_approval_hierarchy' => Yii::t('app', 'Po Approval Hierarchy'),
            'req_approval_hierarchy' => Yii::t('app', 'Req Approval Hierarchy'),
            'tax_ac_id' => Yii::t('app', 'Tax Ac ID'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
