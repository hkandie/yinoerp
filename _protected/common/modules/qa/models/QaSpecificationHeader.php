<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_specification_header}}".
 *
 * @property integer $qa_specification_header_id
 * @property string $specification_name
 * @property string $effective_from
 * @property string $description
 * @property string $effective_to
 * @property integer $item_id_m
 * @property string $item_revision
 * @property integer $ap_supplier_id
 * @property integer $ap_customer_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class QaSpecificationHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_specification_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['specification_name', 'effective_from', 'created_by', 'last_update_by'], 'required'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['item_id_m', 'ap_supplier_id', 'ap_customer_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['specification_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['item_revision'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_specification_header_id' => Yii::t('app', 'Qa Specification Header ID'),
            'specification_name' => Yii::t('app', 'Specification Name'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'description' => Yii::t('app', 'Description'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_revision' => Yii::t('app', 'Item Revision'),
            'ap_supplier_id' => Yii::t('app', 'Ap Supplier ID'),
            'ap_customer_id' => Yii::t('app', 'Ap Customer ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
