<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_count_header}}".
 *
 * @property integer $inv_count_header_id
 * @property string $count_name
 * @property string $count_type
 * @property integer $adjustment_ac_id
 * @property integer $org_id
 * @property string $description
 * @property integer $inv_abc_assignment_header_id
 * @property string $approval_required
 * @property string $quantity_variance_positive
 * @property string $quantity_variance_negative
 * @property string $value_variance_positive
 * @property string $value_variance_negative
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class InvCountHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_count_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['count_name', 'count_type', 'adjustment_ac_id', 'org_id', 'created_by', 'last_update_by'], 'required'],
            [['adjustment_ac_id', 'org_id', 'inv_abc_assignment_header_id', 'created_by', 'last_update_by'], 'integer'],
            [['quantity_variance_positive', 'quantity_variance_negative', 'value_variance_positive', 'value_variance_negative'], 'number'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['count_name', 'approval_required'], 'string', 'max' => 50],
            [['count_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['count_name', 'org_id'], 'unique', 'targetAttribute' => ['count_name', 'org_id'], 'message' => 'The combination of Count Name and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_count_header_id' => Yii::t('app', 'Inv Count Header ID'),
            'count_name' => Yii::t('app', 'Count Name'),
            'count_type' => Yii::t('app', 'Count Type'),
            'adjustment_ac_id' => Yii::t('app', 'Adjustment Ac ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'description' => Yii::t('app', 'Description'),
            'inv_abc_assignment_header_id' => Yii::t('app', 'Inv Abc Assignment Header ID'),
            'approval_required' => Yii::t('app', 'Approval Required'),
            'quantity_variance_positive' => Yii::t('app', 'Quantity Variance Positive'),
            'quantity_variance_negative' => Yii::t('app', 'Quantity Variance Negative'),
            'value_variance_positive' => Yii::t('app', 'Value Variance Positive'),
            'value_variance_negative' => Yii::t('app', 'Value Variance Negative'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
