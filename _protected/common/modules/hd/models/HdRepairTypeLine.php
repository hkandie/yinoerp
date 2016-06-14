<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_repair_type_line}}".
 *
 * @property integer $hd_service_activity_line_id
 * @property integer $hd_service_activity_header_id
 * @property integer $bu_org_id
 * @property integer $header_type_id
 * @property integer $line_type_id
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdRepairTypeLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_repair_type_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_service_activity_header_id', 'bu_org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hd_service_activity_header_id', 'bu_org_id', 'header_type_id', 'line_type_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['hd_service_activity_header_id', 'bu_org_id'], 'unique', 'targetAttribute' => ['hd_service_activity_header_id', 'bu_org_id'], 'message' => 'The combination of Hd Service Activity Header ID and Bu Org ID has already been taken.'],
            [['hd_service_activity_header_id', 'line_type_id'], 'unique', 'targetAttribute' => ['hd_service_activity_header_id', 'line_type_id'], 'message' => 'The combination of Hd Service Activity Header ID and Line Type ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_service_activity_line_id' => Yii::t('app', 'Hd Service Activity Line ID'),
            'hd_service_activity_header_id' => Yii::t('app', 'Hd Service Activity Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'header_type_id' => Yii::t('app', 'Header Type ID'),
            'line_type_id' => Yii::t('app', 'Line Type ID'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
