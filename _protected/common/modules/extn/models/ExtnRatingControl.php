<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_rating_control}}".
 *
 * @property string $pos_inv_control_id
 * @property integer $org_id
 * @property integer $cogs_ac_id
 * @property integer $ar_transaction_type_id
 * @property integer $customer_id
 * @property integer $transaction_subinventory_id
 * @property integer $transaction_locator_id
 * @property integer $return_subinventory_id
 * @property integer $return_locator_id
 * @property integer $item_id_m
 * @property integer $allow_negative_onhand_cb
 * @property integer $customer_site_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ExtnRatingControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_rating_control}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'cogs_ac_id', 'ar_transaction_type_id', 'customer_id', 'transaction_subinventory_id', 'transaction_locator_id', 'return_subinventory_id', 'return_locator_id', 'item_id_m', 'allow_negative_onhand_cb', 'customer_site_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pos_inv_control_id' => Yii::t('app', 'Pos Inv Control ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'cogs_ac_id' => Yii::t('app', 'Cogs Ac ID'),
            'ar_transaction_type_id' => Yii::t('app', 'Ar Transaction Type ID'),
            'customer_id' => Yii::t('app', 'Customer ID'),
            'transaction_subinventory_id' => Yii::t('app', 'Transaction Subinventory ID'),
            'transaction_locator_id' => Yii::t('app', 'Transaction Locator ID'),
            'return_subinventory_id' => Yii::t('app', 'Return Subinventory ID'),
            'return_locator_id' => Yii::t('app', 'Return Locator ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'allow_negative_onhand_cb' => Yii::t('app', 'Allow Negative Onhand Cb'),
            'customer_site_id' => Yii::t('app', 'Customer Site ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
