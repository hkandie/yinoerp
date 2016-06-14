<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_project_type_billing}}".
 *
 * @property string $prj_project_type_billing_id
 * @property integer $prj_project_type_header_id
 * @property integer $prj_billing_extn_id
 * @property string $currency
 * @property string $amount
 * @property string $percentage
 * @property integer $active_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjProjectTypeBilling extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_project_type_billing}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_project_type_header_id', 'prj_billing_extn_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_project_type_header_id', 'prj_billing_extn_id', 'active_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['amount', 'percentage'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['currency'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_project_type_billing_id' => Yii::t('app', 'Prj Project Type Billing ID'),
            'prj_project_type_header_id' => Yii::t('app', 'Prj Project Type Header ID'),
            'prj_billing_extn_id' => Yii::t('app', 'Prj Billing Extn ID'),
            'currency' => Yii::t('app', 'Currency'),
            'amount' => Yii::t('app', 'Amount'),
            'percentage' => Yii::t('app', 'Percentage'),
            'active_cb' => Yii::t('app', 'Active Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
