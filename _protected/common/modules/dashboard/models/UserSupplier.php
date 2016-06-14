<?php

namespace common\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "{{%user_supplier}}".
 *
 * @property string $user_supplier_id
 * @property integer $user_id
 * @property string $supplier_id
 * @property integer $supplier_site_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class UserSupplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_supplier}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'supplier_id', 'created_by', 'last_update_by'], 'required'],
            [['user_id', 'supplier_id', 'supplier_site_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_supplier_id' => Yii::t('app', 'User Supplier ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
