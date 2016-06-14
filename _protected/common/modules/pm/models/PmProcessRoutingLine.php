<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_process_routing_line}}".
 *
 * @property string $pm_process_routing_line_id
 * @property integer $pm_process_routing_header_id
 * @property integer $step_no
 * @property integer $pm_process_operation_header_id
 * @property integer $uom_id
 * @property string $release_type
 * @property string $min_quantity
 * @property string $description
 * @property string $step_quantity
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmProcessRoutingLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_process_routing_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_process_routing_header_id', 'step_no', 'created_by', 'last_update_by'], 'required'],
            [['pm_process_routing_header_id', 'step_no', 'pm_process_operation_header_id', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['step_quantity'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['release_type', 'description'], 'string', 'max' => 255],
            [['min_quantity'], 'string', 'max' => 20],
            [['pm_process_routing_header_id', 'step_no'], 'unique', 'targetAttribute' => ['pm_process_routing_header_id', 'step_no'], 'message' => 'The combination of Pm Process Routing Header ID and Step No has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_process_routing_line_id' => Yii::t('app', 'Pm Process Routing Line ID'),
            'pm_process_routing_header_id' => Yii::t('app', 'Pm Process Routing Header ID'),
            'step_no' => Yii::t('app', 'Step No'),
            'pm_process_operation_header_id' => Yii::t('app', 'Pm Process Operation Header ID'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'release_type' => Yii::t('app', 'Release Type'),
            'min_quantity' => Yii::t('app', 'Min Quantity'),
            'description' => Yii::t('app', 'Description'),
            'step_quantity' => Yii::t('app', 'Step Quantity'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
