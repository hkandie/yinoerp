<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_element_history_line}}".
 *
 * @property string $hr_element_history_line_id
 * @property integer $hr_element_history_header_id
 * @property integer $element_id
 * @property string $element_value
 * @property string $end_date
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrElementHistoryLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_element_history_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_element_history_header_id', 'element_id', 'element_value', 'created_by', 'last_update_by'], 'required'],
            [['hr_element_history_header_id', 'element_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['element_value'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['hr_element_history_header_id', 'element_id'], 'unique', 'targetAttribute' => ['hr_element_history_header_id', 'element_id'], 'message' => 'The combination of Hr Element History Header ID and Element ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_element_history_line_id' => Yii::t('app', 'Hr Element History Line ID'),
            'hr_element_history_header_id' => Yii::t('app', 'Hr Element History Header ID'),
            'element_id' => Yii::t('app', 'Element ID'),
            'element_value' => Yii::t('app', 'Element Value'),
            'end_date' => Yii::t('app', 'End Date'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
