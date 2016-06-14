<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_default_account}}".
 *
 * @property string $prj_default_account_id
 * @property integer $prj_project_type_header_id
 * @property integer $ac_id
 * @property string $document_type
 * @property string $description
 * @property string $status
 * @property string $accounting_group
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjDefaultAccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_default_account}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_project_type_header_id', 'status', 'accounting_group', 'created_by', 'last_update_by'], 'required'],
            [['prj_project_type_header_id', 'ac_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['document_type', 'status', 'accounting_group'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['description'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_default_account_id' => Yii::t('app', 'Prj Default Account ID'),
            'prj_project_type_header_id' => Yii::t('app', 'Prj Project Type Header ID'),
            'ac_id' => Yii::t('app', 'Ac ID'),
            'document_type' => Yii::t('app', 'Document Type'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'accounting_group' => Yii::t('app', 'Accounting Group'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
