<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_specification_line}}".
 *
 * @property integer $qa_specification_line_id
 * @property integer $qa_specification_header_id
 * @property integer $qa_collection_element_header_id
 * @property string $description
 * @property integer $uom_id
 * @property integer $enabled_cb
 * @property string $user_range_low
 * @property string $user_range_high
 * @property string $user_target_value
 * @property string $specification_range_high
 * @property string $specification_range_low
 * @property string $specification_target_value
 * @property string $reasonable_range_low
 * @property string $reasonable_range_high
 * @property integer $reasonable_target_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class QaSpecificationLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_specification_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qa_specification_header_id', 'qa_collection_element_header_id', 'created_by', 'last_update_by'], 'required'],
            [['qa_specification_header_id', 'qa_collection_element_header_id', 'uom_id', 'enabled_cb', 'reasonable_target_value', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
            [['user_range_low', 'user_range_high', 'user_target_value', 'specification_range_high', 'specification_range_low', 'specification_target_value', 'reasonable_range_low', 'reasonable_range_high'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_specification_line_id' => Yii::t('app', 'Qa Specification Line ID'),
            'qa_specification_header_id' => Yii::t('app', 'Qa Specification Header ID'),
            'qa_collection_element_header_id' => Yii::t('app', 'Qa Collection Element Header ID'),
            'description' => Yii::t('app', 'Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'user_range_low' => Yii::t('app', 'User Range Low'),
            'user_range_high' => Yii::t('app', 'User Range High'),
            'user_target_value' => Yii::t('app', 'User Target Value'),
            'specification_range_high' => Yii::t('app', 'Specification Range High'),
            'specification_range_low' => Yii::t('app', 'Specification Range Low'),
            'specification_target_value' => Yii::t('app', 'Specification Target Value'),
            'reasonable_range_low' => Yii::t('app', 'Reasonable Range Low'),
            'reasonable_range_high' => Yii::t('app', 'Reasonable Range High'),
            'reasonable_target_value' => Yii::t('app', 'Reasonable Target Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
