<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_agreement_line}}".
 *
 * @property integer $prj_agreement_line_id
 * @property integer $prj_agreement_header_id
 * @property integer $prj_project_header_id
 * @property integer $prj_project_line_id
 * @property string $allocation_date
 * @property string $allocation_amount
 * @property string $classification
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjAgreementLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_agreement_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_agreement_header_id', 'prj_project_header_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['prj_agreement_header_id', 'prj_project_header_id', 'prj_project_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['allocation_date', 'creation_date', 'last_update_date'], 'safe'],
            [['allocation_amount'], 'number'],
            [['classification'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_agreement_line_id' => Yii::t('app', 'Prj Agreement Line ID'),
            'prj_agreement_header_id' => Yii::t('app', 'Prj Agreement Header ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'allocation_date' => Yii::t('app', 'Allocation Date'),
            'allocation_amount' => Yii::t('app', 'Allocation Amount'),
            'classification' => Yii::t('app', 'Classification'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
