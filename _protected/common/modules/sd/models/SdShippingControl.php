<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_shipping_control}}".
 *
 * @property string $sd_shipping_control_id
 * @property integer $org_id
 * @property integer $ef_id
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property integer $staging_subinventory_id
 * @property integer $staging_locator_id
 * @property integer $default_picking_rule_id
 * @property integer $delivery_onpicking_cb
 * @property integer $autosplit_onpicking_cb
 * @property integer $deffer_invoicing_cb
 * @property integer $default_requested_date_cb
 * @property integer $default_schedule_ship_date_cb
 * @property integer $default_promise_date_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class SdShippingControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_shipping_control}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'ef_id', 'rev_number', 'staging_subinventory_id', 'staging_locator_id', 'default_picking_rule_id', 'delivery_onpicking_cb', 'autosplit_onpicking_cb', 'deffer_invoicing_cb', 'default_requested_date_cb', 'default_schedule_ship_date_cb', 'default_promise_date_cb', 'created_by', 'last_update_by'], 'integer'],
            [['rev_enabled'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_shipping_control_id' => Yii::t('app', 'Sd Shipping Control ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'staging_subinventory_id' => Yii::t('app', 'Staging Subinventory ID'),
            'staging_locator_id' => Yii::t('app', 'Staging Locator ID'),
            'default_picking_rule_id' => Yii::t('app', 'Default Picking Rule ID'),
            'delivery_onpicking_cb' => Yii::t('app', 'Delivery Onpicking Cb'),
            'autosplit_onpicking_cb' => Yii::t('app', 'Autosplit Onpicking Cb'),
            'deffer_invoicing_cb' => Yii::t('app', 'Deffer Invoicing Cb'),
            'default_requested_date_cb' => Yii::t('app', 'Default Requested Date Cb'),
            'default_schedule_ship_date_cb' => Yii::t('app', 'Default Schedule Ship Date Cb'),
            'default_promise_date_cb' => Yii::t('app', 'Default Promise Date Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
