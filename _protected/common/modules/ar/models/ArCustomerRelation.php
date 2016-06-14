<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_customer_relation}}".
 *
 * @property integer $ar_customer_relation_id
 * @property integer $ar_customer_id
 * @property integer $org_id
 * @property integer $reciprocal_cb
 * @property integer $bill_to_cb
 * @property integer $ship_to_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ArCustomerRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_customer_relation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_customer_id', 'org_id', 'created_by', 'last_update_by'], 'required'],
            [['ar_customer_id', 'org_id', 'reciprocal_cb', 'bill_to_cb', 'ship_to_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['ar_customer_id'], 'unique'],
            [['org_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_customer_relation_id' => Yii::t('app', 'Ar Customer Relation ID'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'reciprocal_cb' => Yii::t('app', 'Reciprocal Cb'),
            'bill_to_cb' => Yii::t('app', 'Bill To Cb'),
            'ship_to_cb' => Yii::t('app', 'Ship To Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
