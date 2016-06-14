<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_rfq_detail}}".
 *
 * @property integer $po_rfq_detail_id
 * @property integer $po_rfq_header_id
 * @property integer $po_rfq_line_id
 * @property string $reference_table
 * @property integer $reference_id
 * @property integer $requirement_number
 * @property string $requirement_name
 * @property string $requirement_type
 * @property integer $max_evaludation_points
 * @property string $target_value
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoRfqDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_rfq_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_rfq_header_id', 'po_rfq_line_id', 'requirement_number', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['po_rfq_header_id', 'po_rfq_line_id', 'reference_id', 'requirement_number', 'max_evaludation_points', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['description'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['reference_table', 'requirement_type'], 'string', 'max' => 50],
            [['requirement_name', 'target_value'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_rfq_detail_id' => Yii::t('app', 'Po Rfq Detail ID'),
            'po_rfq_header_id' => Yii::t('app', 'Po Rfq Header ID'),
            'po_rfq_line_id' => Yii::t('app', 'Po Rfq Line ID'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'reference_id' => Yii::t('app', 'Reference ID'),
            'requirement_number' => Yii::t('app', 'Requirement Number'),
            'requirement_name' => Yii::t('app', 'Requirement Name'),
            'requirement_type' => Yii::t('app', 'Requirement Type'),
            'max_evaludation_points' => Yii::t('app', 'Max Evaludation Points'),
            'target_value' => Yii::t('app', 'Target Value'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
