<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_perdiem_rate}}".
 *
 * @property integer $hr_perdiem_rate_id
 * @property string $hr_location_id
 * @property string $hr_grade_id
 * @property string $rate
 * @property string $from_date
 * @property string $to_date
 * @property string $currency
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPerdiemRate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_perdiem_rate}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_location_id', 'rate', 'from_date', 'currency', 'created_by', 'last_update_by'], 'required'],
            [['rate'], 'number'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['hr_location_id', 'description'], 'string', 'max' => 50],
            [['hr_grade_id'], 'string', 'max' => 255],
            [['currency'], 'string', 'max' => 20],
            [['hr_location_id', 'hr_grade_id', 'from_date', 'currency'], 'unique', 'targetAttribute' => ['hr_location_id', 'hr_grade_id', 'from_date', 'currency'], 'message' => 'The combination of Hr Location ID, Hr Grade ID, From Date and Currency has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_perdiem_rate_id' => Yii::t('app', 'Hr Perdiem Rate ID'),
            'hr_location_id' => Yii::t('app', 'Hr Location ID'),
            'hr_grade_id' => Yii::t('app', 'Hr Grade ID'),
            'rate' => Yii::t('app', 'Rate'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'currency' => Yii::t('app', 'Currency'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
