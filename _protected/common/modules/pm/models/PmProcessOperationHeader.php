<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_process_operation_header}}".
 *
 * @property string $pm_process_operation_header_id
 * @property string $operation_name
 * @property integer $org_id
 * @property string $operation_class
 * @property string $description
 * @property string $version
 * @property string $start_date
 * @property string $end_date
 * @property string $status
 * @property string $min_quantity
 * @property string $department
 * @property integer $material_ac_id
 * @property integer $material_oh_ac_id
 * @property integer $overhead_ac_id
 * @property integer $resource_ac_id
 * @property integer $osp_ac_id
 * @property integer $expense_ac_id
 * @property integer $uom_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmProcessOperationHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_process_operation_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['operation_name', 'org_id', 'material_ac_id', 'uom_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'material_ac_id', 'material_oh_ac_id', 'overhead_ac_id', 'resource_ac_id', 'osp_ac_id', 'expense_ac_id', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['min_quantity'], 'number'],
            [['operation_name', 'operation_class', 'status', 'department'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['version'], 'string', 'max' => 20],
            [['org_id', 'operation_class'], 'unique', 'targetAttribute' => ['org_id', 'operation_class'], 'message' => 'The combination of Org ID and Operation Class has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_process_operation_header_id' => Yii::t('app', 'Pm Process Operation Header ID'),
            'operation_name' => Yii::t('app', 'Operation Name'),
            'org_id' => Yii::t('app', 'Org ID'),
            'operation_class' => Yii::t('app', 'Operation Class'),
            'description' => Yii::t('app', 'Description'),
            'version' => Yii::t('app', 'Version'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'status' => Yii::t('app', 'Status'),
            'min_quantity' => Yii::t('app', 'Min Quantity'),
            'department' => Yii::t('app', 'Department'),
            'material_ac_id' => Yii::t('app', 'Material Ac ID'),
            'material_oh_ac_id' => Yii::t('app', 'Material Oh Ac ID'),
            'overhead_ac_id' => Yii::t('app', 'Overhead Ac ID'),
            'resource_ac_id' => Yii::t('app', 'Resource Ac ID'),
            'osp_ac_id' => Yii::t('app', 'Osp Ac ID'),
            'expense_ac_id' => Yii::t('app', 'Expense Ac ID'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
