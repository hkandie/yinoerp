<?php

namespace common\modules\adm\models;

use Yii;

/**
 * This is the model class for table "adm_task_template_header".
 *
 * @property integer $adm_task_template_header_id
 * @property string $template_name
 * @property string $description
 * @property string $application
 * @property string $document_type
 * @property string $from_date
 * @property string $end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AdmTaskTemplateHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adm_task_template_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['template_name', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['from_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['template_name', 'application', 'document_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adm_task_template_header_id' => Yii::t('app', 'Adm Task Template Header ID'),
            'template_name' => Yii::t('app', 'Template Name'),
            'description' => Yii::t('app', 'Description'),
            'application' => Yii::t('app', 'Application'),
            'document_type' => Yii::t('app', 'Document Type'),
            'from_date' => Yii::t('app', 'From Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
