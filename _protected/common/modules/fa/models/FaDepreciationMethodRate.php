<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_depreciation_method_rate}}".
 *
 * @property string $fa_depreciation_method_rate_id
 * @property integer $fa_depreciation_method_id
 * @property integer $year
 * @property integer $period
 * @property string $rate
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaDepreciationMethodRate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_depreciation_method_rate}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_depreciation_method_id', 'year', 'period', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['rate'], 'number'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
            [['fa_depreciation_method_id', 'year', 'period'], 'unique', 'targetAttribute' => ['fa_depreciation_method_id', 'year', 'period'], 'message' => 'The combination of Fa Depreciation Method ID, Year and Period has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_depreciation_method_rate_id' => Yii::t('app', 'Fa Depreciation Method Rate ID'),
            'fa_depreciation_method_id' => Yii::t('app', 'Fa Depreciation Method ID'),
            'year' => Yii::t('app', 'Year'),
            'period' => Yii::t('app', 'Period'),
            'rate' => Yii::t('app', 'Rate'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
