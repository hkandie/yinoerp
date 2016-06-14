<?php

namespace common\modules\wip\models;

use Yii;

/**
 * This is the model class for table "{{%wip_accounting_group}}".
 *
 * @property integer $wip_accounting_group_id
 * @property integer $org_id
 * @property string $wo_type
 * @property string $wip_accounting_group
 * @property string $description
 * @property integer $ef_id
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property string $status
 * @property integer $material_ac_id
 * @property integer $material_oh_ac_id
 * @property integer $overhead_ac_id
 * @property integer $resource_ac_id
 * @property integer $osp_ac_id
 * @property integer $var_material_ac_id
 * @property integer $var_material_oh_ac_id
 * @property integer $var_overhead_ac_id
 * @property integer $var_resource_ac_id
 * @property integer $var_osp_ac_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class WipAccountingGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wip_accounting_group}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'wo_type', 'wip_accounting_group', 'material_ac_id', 'material_oh_ac_id', 'overhead_ac_id', 'resource_ac_id', 'osp_ac_id', 'var_material_ac_id', 'var_material_oh_ac_id', 'var_overhead_ac_id', 'var_resource_ac_id', 'var_osp_ac_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'ef_id', 'rev_number', 'material_ac_id', 'material_oh_ac_id', 'overhead_ac_id', 'resource_ac_id', 'osp_ac_id', 'var_material_ac_id', 'var_material_oh_ac_id', 'var_overhead_ac_id', 'var_resource_ac_id', 'var_osp_ac_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['rev_enabled', 'status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['wo_type'], 'string', 'max' => 25],
            [['wip_accounting_group'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['org_id', 'wip_accounting_group'], 'unique', 'targetAttribute' => ['org_id', 'wip_accounting_group'], 'message' => 'The combination of Org ID and Wip Accounting Group has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wip_accounting_group_id' => Yii::t('app', 'Wip Accounting Group ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'wo_type' => Yii::t('app', 'Wo Type'),
            'wip_accounting_group' => Yii::t('app', 'Wip Accounting Group'),
            'description' => Yii::t('app', 'Description'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'status' => Yii::t('app', 'Status'),
            'material_ac_id' => Yii::t('app', 'Material Ac ID'),
            'material_oh_ac_id' => Yii::t('app', 'Material Oh Ac ID'),
            'overhead_ac_id' => Yii::t('app', 'Overhead Ac ID'),
            'resource_ac_id' => Yii::t('app', 'Resource Ac ID'),
            'osp_ac_id' => Yii::t('app', 'Osp Ac ID'),
            'var_material_ac_id' => Yii::t('app', 'Var Material Ac ID'),
            'var_material_oh_ac_id' => Yii::t('app', 'Var Material Oh Ac ID'),
            'var_overhead_ac_id' => Yii::t('app', 'Var Overhead Ac ID'),
            'var_resource_ac_id' => Yii::t('app', 'Var Resource Ac ID'),
            'var_osp_ac_id' => Yii::t('app', 'Var Osp Ac ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
