<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_bank_v}}".
 *
 * @property integer $mdm_bank_header_id
 * @property string $country
 * @property string $bank_name
 * @property integer $bank_number
 * @property string $description
 * @property string $bank_name_short
 * @property string $bank_name_alt
 * @property string $tax_reg_no
 * @property string $tax_payer_id
 * @property string $branch_name
 * @property string $branch_country
 * @property integer $branch_number
 * @property integer $mdm_bank_site_id
 * @property string $branch_name_short
 * @property string $branch_name_alt
 * @property string $ifsc_code
 * @property string $swift_code
 * @property string $routing_number
 * @property string $iban_code
 * @property string $branch_tax_reg_no
 * @property string $branch_tax_payer_id
 * @property integer $site_address_id
 */
class MdmBankV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_bank_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mdm_bank_header_id', 'bank_number', 'branch_number', 'mdm_bank_site_id', 'site_address_id'], 'integer'],
            [['country', 'bank_name', 'branch_name'], 'required'],
            [['country', 'branch_country'], 'string', 'max' => 25],
            [['bank_name', 'description', 'bank_name_alt', 'branch_name', 'branch_name_alt'], 'string', 'max' => 256],
            [['bank_name_short', 'branch_name_short', 'ifsc_code', 'swift_code', 'routing_number', 'iban_code'], 'string', 'max' => 50],
            [['tax_reg_no', 'tax_payer_id', 'branch_tax_reg_no', 'branch_tax_payer_id'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_bank_header_id' => Yii::t('app', 'Mdm Bank Header ID'),
            'country' => Yii::t('app', 'Country'),
            'bank_name' => Yii::t('app', 'Bank Name'),
            'bank_number' => Yii::t('app', 'Bank Number'),
            'description' => Yii::t('app', 'Description'),
            'bank_name_short' => Yii::t('app', 'Bank Name Short'),
            'bank_name_alt' => Yii::t('app', 'Bank Name Alt'),
            'tax_reg_no' => Yii::t('app', 'Tax Reg No'),
            'tax_payer_id' => Yii::t('app', 'Tax Payer ID'),
            'branch_name' => Yii::t('app', 'Branch Name'),
            'branch_country' => Yii::t('app', 'Branch Country'),
            'branch_number' => Yii::t('app', 'Branch Number'),
            'mdm_bank_site_id' => Yii::t('app', 'Mdm Bank Site ID'),
            'branch_name_short' => Yii::t('app', 'Branch Name Short'),
            'branch_name_alt' => Yii::t('app', 'Branch Name Alt'),
            'ifsc_code' => Yii::t('app', 'Ifsc Code'),
            'swift_code' => Yii::t('app', 'Swift Code'),
            'routing_number' => Yii::t('app', 'Routing Number'),
            'iban_code' => Yii::t('app', 'Iban Code'),
            'branch_tax_reg_no' => Yii::t('app', 'Branch Tax Reg No'),
            'branch_tax_payer_id' => Yii::t('app', 'Branch Tax Payer ID'),
            'site_address_id' => Yii::t('app', 'Site Address ID'),
        ];
    }
}
