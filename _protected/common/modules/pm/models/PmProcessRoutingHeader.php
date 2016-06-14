<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_process_routing_header}}".
 *
 * @property string $pm_process_routing_header_id
 * @property string $routing_name
 * @property integer $org_id
 * @property string $status
 * @property string $description
 * @property string $revision
 * @property string $start_date
 * @property string $end_date
 * @property string $routing_class
 * @property integer $owner_employee_id
 * @property string $quantity
 * @property integer $uom_id
 * @property string $planned_loss
 * @property string $theoretical_loss
 * @property string $fixed_loss
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmProcessRoutingHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_process_routing_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['routing_name', 'org_id', 'quantity', 'uom_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'owner_employee_id', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity', 'planned_loss', 'theoretical_loss', 'fixed_loss'], 'number'],
            [['routing_name', 'routing_class'], 'string', 'max' => 25],
            [['status'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['revision'], 'string', 'max' => 20],
            [['routing_name', 'org_id'], 'unique', 'targetAttribute' => ['routing_name', 'org_id'], 'message' => 'The combination of Routing Name and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_process_routing_header_id' => Yii::t('app', 'Pm Process Routing Header ID'),
            'routing_name' => Yii::t('app', 'Routing Name'),
            'org_id' => Yii::t('app', 'Org ID'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'revision' => Yii::t('app', 'Revision'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'routing_class' => Yii::t('app', 'Routing Class'),
            'owner_employee_id' => Yii::t('app', 'Owner Employee ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'planned_loss' => Yii::t('app', 'Planned Loss'),
            'theoretical_loss' => Yii::t('app', 'Theoretical Loss'),
            'fixed_loss' => Yii::t('app', 'Fixed Loss'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
