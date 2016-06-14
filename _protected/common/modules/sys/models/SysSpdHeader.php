<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_spd_header}}".
 *
 * @property integer $sys_spd_header_id
 * @property integer $org_id
 * @property string $document_number
 * @property string $status
 * @property string $security_level
 * @property string $primary_document
 * @property integer $primary_document_id
 * @property integer $template_id
 * @property string $change_type
 * @property string $originator
 * @property string $description
 * @property string $reason_code
 * @property string $product_line
 * @property integer $process_flow_header_id
 * @property integer $current_process_flow_line_id
 * @property string $origination_date
 * @property integer $owner_user_id
 * @property string $release_date
 * @property string $completion_date
 * @property integer $project_task_id
 * @property string $access_org
 * @property string $related_changes
 * @property integer $priority
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysSpdHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_spd_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'process_flow_header_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['org_id', 'primary_document_id', 'template_id', 'process_flow_header_id', 'current_process_flow_line_id', 'owner_user_id', 'project_task_id', 'priority', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['description', 'access_org', 'related_changes'], 'string'],
            [['origination_date', 'release_date', 'completion_date', 'creation_date', 'last_update_date'], 'safe'],
            [['document_number'], 'string', 'max' => 20],
            [['status', 'security_level', 'change_type'], 'string', 'max' => 25],
            [['primary_document', 'reason_code'], 'string', 'max' => 100],
            [['originator'], 'string', 'max' => 256],
            [['product_line'], 'string', 'max' => 50],
            [['security_level', 'change_type'], 'unique', 'targetAttribute' => ['security_level', 'change_type'], 'message' => 'The combination of Security Level and Change Type has already been taken.'],
            [['primary_document', 'primary_document_id'], 'unique', 'targetAttribute' => ['primary_document', 'primary_document_id'], 'message' => 'The combination of Primary Document and Primary Document ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_spd_header_id' => Yii::t('app', 'Sys Spd Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'document_number' => Yii::t('app', 'Document Number'),
            'status' => Yii::t('app', 'Status'),
            'security_level' => Yii::t('app', 'Security Level'),
            'primary_document' => Yii::t('app', 'Primary Document'),
            'primary_document_id' => Yii::t('app', 'Primary Document ID'),
            'template_id' => Yii::t('app', 'Template ID'),
            'change_type' => Yii::t('app', 'Change Type'),
            'originator' => Yii::t('app', 'Originator'),
            'description' => Yii::t('app', 'Description'),
            'reason_code' => Yii::t('app', 'Reason Code'),
            'product_line' => Yii::t('app', 'Product Line'),
            'process_flow_header_id' => Yii::t('app', 'Process Flow Header ID'),
            'current_process_flow_line_id' => Yii::t('app', 'Current Process Flow Line ID'),
            'origination_date' => Yii::t('app', 'Origination Date'),
            'owner_user_id' => Yii::t('app', 'Owner User ID'),
            'release_date' => Yii::t('app', 'Release Date'),
            'completion_date' => Yii::t('app', 'Completion Date'),
            'project_task_id' => Yii::t('app', 'Project Task ID'),
            'access_org' => Yii::t('app', 'Access Org'),
            'related_changes' => Yii::t('app', 'Related Changes'),
            'priority' => Yii::t('app', 'Priority'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
