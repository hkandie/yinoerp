<?php

namespace common\modules\option\models;

use Yii;

/**
 * This is the model class for table "{{%option_line}}".
 *
 * @property string $option_line_id
 * @property string $option_header_id
 * @property string $option_line_code
 * @property string $option_line_value
 * @property string $description
 * @property integer $value_group_id
 * @property integer $priority
 * @property string $status
 * @property string $mapper1
 * @property string $mapper2
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 *
 * @property OptionHeader $optionHeader
 */
class OptionLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%option_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['option_header_id', 'option_line_code', 'option_line_value', 'description', 'created_by', 'last_update_by'], 'required'],
            [['option_header_id', 'value_group_id', 'priority', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status', 'rev_enabled'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['option_line_code', 'option_line_value', 'effective_start_date', 'effective_end_date'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['mapper1', 'mapper2'], 'string', 'max' => 25],
            [['option_header_id', 'option_line_code'], 'unique', 'targetAttribute' => ['option_header_id', 'option_line_code'], 'message' => 'The combination of Option Header ID and Option Line Code has already been taken.'],
            [['option_header_id'], 'exist', 'skipOnError' => true, 'targetClass' => OptionHeader::className(), 'targetAttribute' => ['option_header_id' => 'option_header_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'option_line_id' => Yii::t('app', 'Option Line ID'),
            'option_header_id' => Yii::t('app', 'Option Header ID'),
            'option_line_code' => Yii::t('app', 'Option Line Code'),
            'option_line_value' => Yii::t('app', 'Option Line Value'),
            'description' => Yii::t('app', 'Description'),
            'value_group_id' => Yii::t('app', 'Value Group ID'),
            'priority' => Yii::t('app', 'Priority'),
            'status' => Yii::t('app', 'Status'),
            'mapper1' => Yii::t('app', 'Mapper1'),
            'mapper2' => Yii::t('app', 'Mapper2'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptionHeader()
    {
        return $this->hasOne(OptionHeader::className(), ['option_header_id' => 'option_header_id']);
    }
}
