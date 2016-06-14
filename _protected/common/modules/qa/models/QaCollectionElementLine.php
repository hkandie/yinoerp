<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_collection_element_line}}".
 *
 * @property integer $qa_collection_element_line_id
 * @property integer $qa_collection_element_header_id
 * @property string $element_value
 * @property string $description
 * @property string $end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class QaCollectionElementLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_collection_element_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qa_collection_element_header_id', 'element_value', 'created_by', 'last_update_by'], 'required'],
            [['qa_collection_element_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['element_value'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_collection_element_line_id' => Yii::t('app', 'Qa Collection Element Line ID'),
            'qa_collection_element_header_id' => Yii::t('app', 'Qa Collection Element Header ID'),
            'element_value' => Yii::t('app', 'Element Value'),
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
