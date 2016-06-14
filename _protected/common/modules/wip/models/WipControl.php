<?php

namespace common\modules\wip\models;

use Yii;

/**
 * This is the model class for table "{{%wip_control}}".
 *
 * @property string $wip_control_id
 * @property integer $org_id
 * @property integer $default_accounting_group
 * @property string $wo_number_type
 * @property integer $allow_one_operation_cb
 * @property integer $completion_subinventory_id
 * @property integer $completion_locator_id
 * @property integer $issue_subinventory_id
 * @property integer $issue_locator_id
 * @property string $so_change_effect
 * @property integer $auto_release_days
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class WipControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wip_control}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'default_accounting_group', 'allow_one_operation_cb', 'completion_subinventory_id', 'completion_locator_id', 'issue_subinventory_id', 'issue_locator_id', 'auto_release_days', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['wo_number_type', 'so_change_effect'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wip_control_id' => Yii::t('app', 'Wip Control ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'default_accounting_group' => Yii::t('app', 'Default Accounting Group'),
            'wo_number_type' => Yii::t('app', 'Wo Number Type'),
            'allow_one_operation_cb' => Yii::t('app', 'Allow One Operation Cb'),
            'completion_subinventory_id' => Yii::t('app', 'Completion Subinventory ID'),
            'completion_locator_id' => Yii::t('app', 'Completion Locator ID'),
            'issue_subinventory_id' => Yii::t('app', 'Issue Subinventory ID'),
            'issue_locator_id' => Yii::t('app', 'Issue Locator ID'),
            'so_change_effect' => Yii::t('app', 'So Change Effect'),
            'auto_release_days' => Yii::t('app', 'Auto Release Days'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
