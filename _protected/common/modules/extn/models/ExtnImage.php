<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_image}}".
 *
 * @property string $extn_image_id
 * @property string $file_path
 * @property string $file_name
 * @property string $file_size
 * @property string $file_type
 * @property string $display_type
 * @property string $description
 * @property string $document_type
 * @property string $module_name
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ExtnImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_image}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_path', 'file_name', 'file_size', 'file_type', 'created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['file_path'], 'string', 'max' => 255],
            [['file_name', 'document_type'], 'string', 'max' => 50],
            [['file_size', 'file_type', 'display_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 200],
            [['module_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_image_id' => Yii::t('app', 'Extn Image ID'),
            'file_path' => Yii::t('app', 'File Path'),
            'file_name' => Yii::t('app', 'File Name'),
            'file_size' => Yii::t('app', 'File Size'),
            'file_type' => Yii::t('app', 'File Type'),
            'display_type' => Yii::t('app', 'Display Type'),
            'description' => Yii::t('app', 'Description'),
            'document_type' => Yii::t('app', 'Document Type'),
            'module_name' => Yii::t('app', 'Module Name'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
