<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_catalog_value}}".
 *
 * @property string $sys_catalog_value_id
 * @property integer $sys_catalog_line_id
 * @property integer $sys_catalog_header_id
 * @property string $line_value
 * @property string $reference_table
 * @property integer $reference_id
 * @property integer $company_id
 */
class SysCatalogValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_catalog_value}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_catalog_line_id', 'sys_catalog_header_id', 'line_value', 'reference_table', 'reference_id'], 'required'],
            [['sys_catalog_line_id', 'sys_catalog_header_id', 'reference_id', 'company_id'], 'integer'],
            [['line_value'], 'string', 'max' => 255],
            [['reference_table'], 'string', 'max' => 100],
            [['sys_catalog_line_id', 'reference_table', 'reference_id'], 'unique', 'targetAttribute' => ['sys_catalog_line_id', 'reference_table', 'reference_id'], 'message' => 'The combination of Sys Catalog Line ID, Reference Table and Reference ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_catalog_value_id' => Yii::t('app', 'Sys Catalog Value ID'),
            'sys_catalog_line_id' => Yii::t('app', 'Sys Catalog Line ID'),
            'sys_catalog_header_id' => Yii::t('app', 'Sys Catalog Header ID'),
            'line_value' => Yii::t('app', 'Line Value'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'reference_id' => Yii::t('app', 'Reference ID'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
