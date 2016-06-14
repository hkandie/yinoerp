<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_sbp_line}}".
 *
 * @property integer $hd_sbp_line_id
 * @property integer $hd_sbp_header_id
 * @property integer $hd_service_activity_header_id
 * @property string $start_date
 * @property string $end_date
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdSbpLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_sbp_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_sbp_header_id', 'hd_service_activity_header_id', 'created_by', 'last_update_by'], 'required'],
            [['hd_sbp_header_id', 'hd_service_activity_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['hd_sbp_header_id', 'hd_service_activity_header_id'], 'unique', 'targetAttribute' => ['hd_sbp_header_id', 'hd_service_activity_header_id'], 'message' => 'The combination of Hd Sbp Header ID and Hd Service Activity Header ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_sbp_line_id' => Yii::t('app', 'Hd Sbp Line ID'),
            'hd_sbp_header_id' => Yii::t('app', 'Hd Sbp Header ID'),
            'hd_service_activity_header_id' => Yii::t('app', 'Hd Service Activity Header ID'),
            'start_date' => Yii::t('app', 'Start Date'),
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
