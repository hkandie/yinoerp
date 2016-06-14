<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_catalog_line}}".
 *
 * @property string $sys_catalog_line_id
 * @property integer $sys_catalog_header_id
 * @property string $line_name
 * @property integer $sys_value_group_header_id
 * @property string $description
 * @property integer $required_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysCatalogLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_catalog_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_catalog_header_id', 'created_by', 'last_update_by'], 'required'],
            [['sys_catalog_header_id', 'sys_value_group_header_id', 'required_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['line_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['sys_catalog_header_id', 'line_name'], 'unique', 'targetAttribute' => ['sys_catalog_header_id', 'line_name'], 'message' => 'The combination of Sys Catalog Header ID and Line Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_catalog_line_id' => Yii::t('app', 'Sys Catalog Line ID'),
            'sys_catalog_header_id' => Yii::t('app', 'Sys Catalog Header ID'),
            'line_name' => Yii::t('app', 'Line Name'),
            'sys_value_group_header_id' => Yii::t('app', 'Sys Value Group Header ID'),
            'description' => Yii::t('app', 'Description'),
            'required_cb' => Yii::t('app', 'Required Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
