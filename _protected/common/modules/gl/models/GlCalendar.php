<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_calendar}}".
 *
 * @property integer $gl_calendar_id
 * @property string $option_line_code
 * @property integer $adjustment_period_cb
 * @property string $name
 * @property string $calendar_type
 * @property string $year
 * @property integer $quarter
 * @property integer $number
 * @property string $from_date
 * @property string $to_date
 * @property string $name_prefix
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class GlCalendar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_calendar}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['option_line_code', 'name', 'calendar_type', 'number', 'created_by', 'last_update_by'], 'required'],
            [['adjustment_period_cb', 'quarter', 'number', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['year', 'from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['option_line_code', 'name', 'calendar_type'], 'string', 'max' => 50],
            [['name_prefix'], 'string', 'max' => 20],
            [['option_line_code', 'name'], 'unique', 'targetAttribute' => ['option_line_code', 'name'], 'message' => 'The combination of Option Line Code and Name has already been taken.'],
            [['option_line_code', 'year', 'number'], 'unique', 'targetAttribute' => ['option_line_code', 'year', 'number'], 'message' => 'The combination of Option Line Code, Year and Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_calendar_id' => Yii::t('app', 'Gl Calendar ID'),
            'option_line_code' => Yii::t('app', 'Option Line Code'),
            'adjustment_period_cb' => Yii::t('app', 'Adjustment Period Cb'),
            'name' => Yii::t('app', 'Name'),
            'calendar_type' => Yii::t('app', 'Calendar Type'),
            'year' => Yii::t('app', 'Year'),
            'quarter' => Yii::t('app', 'Quarter'),
            'number' => Yii::t('app', 'Number'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'name_prefix' => Yii::t('app', 'Name Prefix'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
