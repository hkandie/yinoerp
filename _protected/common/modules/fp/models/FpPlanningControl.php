<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_planning_control}}".
 *
 * @property string $fp_planning_control_id
 * @property integer $org_id
 * @property integer $auto_consumed_group_id
 * @property integer $auto_consumed_frwd_days
 * @property integer $auto_consumed_backwd_days
 * @property string $default_abc
 * @property integer $net_wip_cb
 * @property integer $net_po_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpPlanningControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_planning_control}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'auto_consumed_group_id', 'auto_consumed_frwd_days', 'auto_consumed_backwd_days', 'net_wip_cb', 'net_po_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['default_abc'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_planning_control_id' => Yii::t('app', 'Fp Planning Control ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'auto_consumed_group_id' => Yii::t('app', 'Auto Consumed Group ID'),
            'auto_consumed_frwd_days' => Yii::t('app', 'Auto Consumed Frwd Days'),
            'auto_consumed_backwd_days' => Yii::t('app', 'Auto Consumed Backwd Days'),
            'default_abc' => Yii::t('app', 'Default Abc'),
            'net_wip_cb' => Yii::t('app', 'Net Wip Cb'),
            'net_po_cb' => Yii::t('app', 'Net Po Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
