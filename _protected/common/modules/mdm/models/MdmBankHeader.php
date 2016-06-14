<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_bank_header}}".
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
 * @property integer $address_id
 * @property integer $contact_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class MdmBankHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_bank_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'bank_name', 'created_by', 'last_update_by'], 'required'],
            [['bank_number', 'address_id', 'contact_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['country'], 'string', 'max' => 25],
            [['bank_name', 'description', 'bank_name_alt'], 'string', 'max' => 256],
            [['bank_name_short'], 'string', 'max' => 50],
            [['tax_reg_no', 'tax_payer_id'], 'string', 'max' => 40],
            [['bank_name'], 'unique'],
            [['bank_name_short'], 'unique'],
            [['bank_name_short'], 'unique'],
            [['bank_name_alt'], 'unique'],
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
            'address_id' => Yii::t('app', 'Address ID'),
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
