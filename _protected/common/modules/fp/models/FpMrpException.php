<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mrp_exception}}".
 *
 * @property integer $fp_mrp_exception_id
 * @property integer $org_id
 * @property integer $fp_mrp_header_id
 * @property string $exception_message
 * @property string $detailed_message
 * @property string $exception_type
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpMrpException extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mrp_exception}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'fp_mrp_header_id', 'exception_message', 'exception_type', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'fp_mrp_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['detailed_message'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['exception_message'], 'string', 'max' => 256],
            [['exception_type', 'reference_type', 'reference_key_value'], 'string', 'max' => 25],
            [['reference_key_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_mrp_exception_id' => Yii::t('app', 'Fp Mrp Exception ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'fp_mrp_header_id' => Yii::t('app', 'Fp Mrp Header ID'),
            'exception_message' => Yii::t('app', 'Exception Message'),
            'detailed_message' => Yii::t('app', 'Detailed Message'),
            'exception_type' => Yii::t('app', 'Exception Type'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
