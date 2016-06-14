<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_contact_reference}}".
 *
 * @property integer $extn_contact_reference_id
 * @property integer $extn_contact_id
 * @property string $status
 * @property string $reference_type
 * @property string $reference_table
 * @property integer $reference_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ExtnContactReference extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_contact_reference}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['extn_contact_id', 'reference_table', 'reference_id', 'created_by', 'last_update_by'], 'required'],
            [['extn_contact_id', 'reference_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['status'], 'string', 'max' => 20],
            [['reference_type', 'reference_table'], 'string', 'max' => 50],
            [['status', 'reference_type', 'reference_table', 'reference_id'], 'unique', 'targetAttribute' => ['status', 'reference_type', 'reference_table', 'reference_id'], 'message' => 'The combination of Status, Reference Type, Reference Table and Reference ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_contact_reference_id' => Yii::t('app', 'Extn Contact Reference ID'),
            'extn_contact_id' => Yii::t('app', 'Extn Contact ID'),
            'status' => Yii::t('app', 'Status'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'reference_id' => Yii::t('app', 'Reference ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
