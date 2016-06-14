<?php

namespace common\modules\cc\models;

use Yii;

/**
 * This is the model class for table "{{%cc_co_template_header}}".
 *
 * @property integer $cc_co_template_header_id
 * @property string $template_name
 * @property integer $org_id
 * @property string $description
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class CcCoTemplateHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cc_co_template_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['template_name', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['org_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['template_name'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 50],
            [['template_name', 'description'], 'unique', 'targetAttribute' => ['template_name', 'description'], 'message' => 'The combination of Template Name and Description has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cc_co_template_header_id' => Yii::t('app', 'Cc Co Template Header ID'),
            'template_name' => Yii::t('app', 'Template Name'),
            'org_id' => Yii::t('app', 'Org ID'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
