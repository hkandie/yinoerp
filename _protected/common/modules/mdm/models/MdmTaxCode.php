<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_tax_code}}".
 *
 * @property string $mdm_tax_code_id
 * @property integer $org_id
 * @property string $tax_code
 * @property string $tax_type
 * @property string $dr_cr
 * @property string $in_out
 * @property string $description
 * @property string $printed_tax_name
 * @property string $tax_regime
 * @property string $tax_jurisdiction
 * @property string $offset_tax_code
 * @property integer $allow_adhoc_rate_cb
 * @property integer $allow_tax_exemptions_cb
 * @property string $calculation_method
 * @property string $percentage
 * @property string $tax_amount
 * @property integer $tax_ac_id
 * @property string $status
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class MdmTaxCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_tax_code}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'tax_code', 'tax_ac_id', 'status', 'effective_start_date', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'allow_adhoc_rate_cb', 'allow_tax_exemptions_cb', 'tax_ac_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['percentage', 'tax_amount'], 'number'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['tax_code', 'tax_type', 'offset_tax_code', 'calculation_method', 'status'], 'string', 'max' => 25],
            [['dr_cr', 'in_out'], 'string', 'max' => 10],
            [['description', 'printed_tax_name'], 'string', 'max' => 256],
            [['tax_regime', 'tax_jurisdiction'], 'string', 'max' => 50],
            [['tax_code', 'description'], 'unique', 'targetAttribute' => ['tax_code', 'description'], 'message' => 'The combination of Tax Code and Description has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_tax_code_id' => Yii::t('app', 'Mdm Tax Code ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'tax_code' => Yii::t('app', 'Tax Code'),
            'tax_type' => Yii::t('app', 'Tax Type'),
            'dr_cr' => Yii::t('app', 'Dr Cr'),
            'in_out' => Yii::t('app', 'In Out'),
            'description' => Yii::t('app', 'Description'),
            'printed_tax_name' => Yii::t('app', 'Printed Tax Name'),
            'tax_regime' => Yii::t('app', 'Tax Regime'),
            'tax_jurisdiction' => Yii::t('app', 'Tax Jurisdiction'),
            'offset_tax_code' => Yii::t('app', 'Offset Tax Code'),
            'allow_adhoc_rate_cb' => Yii::t('app', 'Allow Adhoc Rate Cb'),
            'allow_tax_exemptions_cb' => Yii::t('app', 'Allow Tax Exemptions Cb'),
            'calculation_method' => Yii::t('app', 'Calculation Method'),
            'percentage' => Yii::t('app', 'Percentage'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'tax_ac_id' => Yii::t('app', 'Tax Ac ID'),
            'status' => Yii::t('app', 'Status'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
