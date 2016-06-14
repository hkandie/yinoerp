<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_collection_element_action}}".
 *
 * @property integer $qa_collection_element_action_id
 * @property integer $qa_collection_element_header_id
 * @property string $action_condition
 * @property string $comparison
 * @property string $value_from
 * @property string $value_to
 * @property string $spec_value
 * @property string $quality_action
 * @property string $description
 * @property string $end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class QaCollectionElementAction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_collection_element_action}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qa_collection_element_header_id', 'action_condition', 'created_by', 'last_update_by'], 'required'],
            [['qa_collection_element_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['action_condition'], 'string', 'max' => 5],
            [['comparison'], 'string', 'max' => 10],
            [['value_from', 'value_to'], 'string', 'max' => 50],
            [['spec_value'], 'string', 'max' => 20],
            [['quality_action'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_collection_element_action_id' => Yii::t('app', 'Qa Collection Element Action ID'),
            'qa_collection_element_header_id' => Yii::t('app', 'Qa Collection Element Header ID'),
            'action_condition' => Yii::t('app', 'Action Condition'),
            'comparison' => Yii::t('app', 'Comparison'),
            'value_from' => Yii::t('app', 'Value From'),
            'value_to' => Yii::t('app', 'Value To'),
            'spec_value' => Yii::t('app', 'Spec Value'),
            'quality_action' => Yii::t('app', 'Quality Action'),
            'description' => Yii::t('app', 'Description'),
            'end_date' => Yii::t('app', 'End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
