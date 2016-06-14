<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_cp_header}}".
 *
 * @property integer $qa_cp_header_id
 * @property integer $org_id
 * @property string $plan_name
 * @property string $effective_from
 * @property string $description
 * @property string $effective_to
 * @property string $plan_type
 * @property integer $qa_specification_header_id
 * @property integer $specification_type
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class QaCpHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_cp_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'plan_name', 'effective_from', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'qa_specification_header_id', 'specification_type', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['plan_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['plan_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_cp_header_id' => Yii::t('app', 'Qa Cp Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'plan_name' => Yii::t('app', 'Plan Name'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'description' => Yii::t('app', 'Description'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'plan_type' => Yii::t('app', 'Plan Type'),
            'qa_specification_header_id' => Yii::t('app', 'Qa Specification Header ID'),
            'specification_type' => Yii::t('app', 'Specification Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
