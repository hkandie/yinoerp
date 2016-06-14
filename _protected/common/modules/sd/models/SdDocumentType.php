<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_document_type}}".
 *
 * @property integer $sd_document_type_id
 * @property string $document_type_name
 * @property integer $bu_org_id_r
 * @property string $level
 * @property string $type
 * @property string $supply_source
 * @property string $description
 * @property string $category
 * @property integer $process_flow_id
 * @property integer $default_line_document
 * @property integer $price_list_header_id
 * @property integer $default_shipfrom_org_id
 * @property string $destination_type
 * @property string $ar_transaction_type
 * @property string $ar_transaction_source
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class SdDocumentType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_document_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document_type_name', 'level', 'type', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id_r', 'process_flow_id', 'default_line_document', 'price_list_header_id', 'default_shipfrom_org_id', 'created_by', 'last_update_by'], 'integer'],
            [['level', 'type', 'category'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['document_type_name', 'supply_source', 'destination_type', 'ar_transaction_type', 'ar_transaction_source'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['document_type_name', 'bu_org_id_r'], 'unique', 'targetAttribute' => ['document_type_name', 'bu_org_id_r'], 'message' => 'The combination of Document Type Name and Bu Org Id R has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_document_type_id' => Yii::t('app', 'Sd Document Type ID'),
            'document_type_name' => Yii::t('app', 'Document Type Name'),
            'bu_org_id_r' => Yii::t('app', 'Bu Org Id R'),
            'level' => Yii::t('app', 'Level'),
            'type' => Yii::t('app', 'Type'),
            'supply_source' => Yii::t('app', 'Supply Source'),
            'description' => Yii::t('app', 'Description'),
            'category' => Yii::t('app', 'Category'),
            'process_flow_id' => Yii::t('app', 'Process Flow ID'),
            'default_line_document' => Yii::t('app', 'Default Line Document'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'default_shipfrom_org_id' => Yii::t('app', 'Default Shipfrom Org ID'),
            'destination_type' => Yii::t('app', 'Destination Type'),
            'ar_transaction_type' => Yii::t('app', 'Ar Transaction Type'),
            'ar_transaction_source' => Yii::t('app', 'Ar Transaction Source'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
