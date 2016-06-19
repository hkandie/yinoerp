<?php

namespace common\modules\option\models;

use Yii;

/**
 * This is the model class for table "{{%option_header}}".
 *
 * @property string $option_header_id
 * @property string $access_level
 * @property string $option_type
 * @property string $description
 * @property string $module_code
 * @property string $option_assignments
 * @property integer $efid
 * @property string $status
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 *
 * @property OptionDetail[] $optionDetails
 * @property OptionLine[] $optionLines
 */
class OptionHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%option_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['option_type', 'module_code', 'created_by', 'last_update_by'], 'required'],
            [['efid', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status', 'rev_enabled'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['access_level'], 'string', 'max' => 20],
            [['option_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
            [['module_code'], 'string', 'max' => 10],
            [['option_assignments'], 'string', 'max' => 100],
            [['option_type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'option_header_id' => Yii::t('app', 'Option Header ID'),
            'access_level' => Yii::t('app', 'Access Level'),
            'option_type' => Yii::t('app', 'Option Type'),
            'description' => Yii::t('app', 'Description'),
            'module_code' => Yii::t('app', 'Module Code'),
            'option_assignments' => Yii::t('app', 'Option Assignments'),
            'efid' => Yii::t('app', 'Efid'),
            'status' => Yii::t('app', 'Status'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
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
    public function getOptionDetails()
    {
        return $this->hasMany(OptionDetail::className(), ['option_header_id' => 'option_header_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptionLines()
    {
        return $this->hasMany(OptionLine::className(), ['option_header_id' => 'option_header_id']);
    }
    public static $position_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 0];
}
