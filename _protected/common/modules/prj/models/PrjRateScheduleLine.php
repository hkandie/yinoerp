<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_rate_schedule_line}}".
 *
 * @property string $prj_rate_schedule_line_id
 * @property integer $prj_rate_schedule_header_id
 * @property string $reference_key_name
 * @property string $effective_from
 * @property string $description
 * @property string $effective_to
 * @property string $reference_key_value
 * @property integer $uom_id
 * @property string $rate
 * @property integer $mark_up_percentage
 * @property string $resource_name
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjRateScheduleLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_rate_schedule_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_rate_schedule_header_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_rate_schedule_header_id', 'reference_key_value', 'uom_id', 'mark_up_percentage', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['rate'], 'number'],
            [['reference_key_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['resource_name'], 'string', 'max' => 25],
            [['prj_rate_schedule_header_id', 'reference_key_name'], 'unique', 'targetAttribute' => ['prj_rate_schedule_header_id', 'reference_key_name'], 'message' => 'The combination of Prj Rate Schedule Header ID and Reference Key Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_rate_schedule_line_id' => Yii::t('app', 'Prj Rate Schedule Line ID'),
            'prj_rate_schedule_header_id' => Yii::t('app', 'Prj Rate Schedule Header ID'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'description' => Yii::t('app', 'Description'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'rate' => Yii::t('app', 'Rate'),
            'mark_up_percentage' => Yii::t('app', 'Mark Up Percentage'),
            'resource_name' => Yii::t('app', 'Resource Name'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
