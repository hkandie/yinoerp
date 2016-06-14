<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_catalog_header}}".
 *
 * @property string $sys_catalog_header_id
 * @property string $catalog
 * @property string $description
 * @property integer $parent_catalog_header_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysCatalogHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_catalog_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catalog', 'created_by', 'last_update_by'], 'required'],
            [['parent_catalog_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['catalog'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 25],
            [['catalog'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_catalog_header_id' => Yii::t('app', 'Sys Catalog Header ID'),
            'catalog' => Yii::t('app', 'Catalog'),
            'description' => Yii::t('app', 'Description'),
            'parent_catalog_header_id' => Yii::t('app', 'Parent Catalog Header ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
