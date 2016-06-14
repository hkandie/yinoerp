<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mrp_header}}".
 *
 * @property integer $fp_mrp_header_id
 * @property integer $org_id
 * @property string $mrp_name
 * @property string $description
 * @property string $status
 * @property string $demand_source
 * @property integer $include_so_cb
 * @property integer $planning_horizon_days
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpMrpHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mrp_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'mrp_name', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'include_so_cb', 'planning_horizon_days', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['mrp_name', 'status', 'demand_source'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['org_id', 'mrp_name'], 'unique', 'targetAttribute' => ['org_id', 'mrp_name'], 'message' => 'The combination of Org ID and Mrp Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_mrp_header_id' => Yii::t('app', 'Fp Mrp Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'mrp_name' => Yii::t('app', 'Mrp Name'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'demand_source' => Yii::t('app', 'Demand Source'),
            'include_so_cb' => Yii::t('app', 'Include So Cb'),
            'planning_horizon_days' => Yii::t('app', 'Planning Horizon Days'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
