<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_bank_site}}".
 *
 * @property integer $mdm_bank_site_id
 * @property integer $mdm_bank_header_id
 * @property string $branch_name
 * @property string $country
 * @property integer $branch_number
 * @property string $description
 * @property string $branch_name_short
 * @property string $branch_name_alt
 * @property string $ifsc_code
 * @property string $swift_code
 * @property string $routing_number
 * @property string $iban_code
 * @property string $tax_reg_no
 * @property string $tax_payer_id
 * @property integer $site_address_id
 * @property integer $contact_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class MdmBankSite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_bank_site}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mdm_bank_header_id', 'branch_name', 'created_by', 'last_update_by'], 'required'],
            [['mdm_bank_header_id', 'branch_number', 'site_address_id', 'contact_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['branch_name', 'description', 'branch_name_alt'], 'string', 'max' => 256],
            [['country'], 'string', 'max' => 25],
            [['branch_name_short', 'ifsc_code', 'swift_code', 'routing_number', 'iban_code'], 'string', 'max' => 50],
            [['tax_reg_no', 'tax_payer_id'], 'string', 'max' => 40],
            [['mdm_bank_header_id', 'branch_name'], 'unique', 'targetAttribute' => ['mdm_bank_header_id', 'branch_name'], 'message' => 'The combination of Mdm Bank Header ID and Branch Name has already been taken.'],
            [['branch_name_short'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_bank_site_id' => Yii::t('app', 'Mdm Bank Site ID'),
            'mdm_bank_header_id' => Yii::t('app', 'Mdm Bank Header ID'),
            'branch_name' => Yii::t('app', 'Branch Name'),
            'country' => Yii::t('app', 'Country'),
            'branch_number' => Yii::t('app', 'Branch Number'),
            'description' => Yii::t('app', 'Description'),
            'branch_name_short' => Yii::t('app', 'Branch Name Short'),
            'branch_name_alt' => Yii::t('app', 'Branch Name Alt'),
            'ifsc_code' => Yii::t('app', 'Ifsc Code'),
            'swift_code' => Yii::t('app', 'Swift Code'),
            'routing_number' => Yii::t('app', 'Routing Number'),
            'iban_code' => Yii::t('app', 'Iban Code'),
            'tax_reg_no' => Yii::t('app', 'Tax Reg No'),
            'tax_payer_id' => Yii::t('app', 'Tax Payer ID'),
            'site_address_id' => Yii::t('app', 'Site Address ID'),
            'contact_id' => Yii::t('app', 'Contact ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
