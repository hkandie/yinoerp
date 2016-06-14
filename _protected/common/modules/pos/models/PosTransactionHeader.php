<?php

namespace common\modules\pos\models;

use Yii;

/**
 * This is the model class for table "{{%pos_transaction_header}}".
 *
 * @property integer $pos_transaction_header_id
 * @property string $terminal_name
 * @property string $currency_code
 * @property string $header_amount
 * @property string $tax_amount
 * @property string $discount_amount
 * @property string $total_amount
 * @property string $description
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PosTransactionHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pos_transaction_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['terminal_name', 'created_by', 'last_update_by'], 'required'],
            [['header_amount', 'tax_amount', 'discount_amount', 'total_amount'], 'number'],
            [['ar_customer_id', 'ar_customer_site_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['terminal_name'], 'string', 'max' => 50],
            [['currency_code'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pos_transaction_header_id' => Yii::t('app', 'Pos Transaction Header ID'),
            'terminal_name' => Yii::t('app', 'Terminal Name'),
            'currency_code' => Yii::t('app', 'Currency Code'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'discount_amount' => Yii::t('app', 'Discount Amount'),
            'total_amount' => Yii::t('app', 'Total Amount'),
            'description' => Yii::t('app', 'Description'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
