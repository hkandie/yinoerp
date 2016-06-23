<?php

namespace common\modules\address\models;

use Yii;

/**
 * This is the model class for table "address_reference".
 *
 * @property string $address_reference_id
 * @property integer $address_id
 * @property string $reference_table
 * @property integer $reference_id
 * @property string $status
 * @property integer $company_id
 */
class AddressReference extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address_reference';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address_id', 'reference_table', 'reference_id'], 'required'],
            [['address_id', 'reference_id', 'company_id'], 'integer'],
            [['reference_table'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 25],
            [['address_id', 'reference_table', 'reference_id'], 'unique', 'targetAttribute' => ['address_id', 'reference_table', 'reference_id'], 'message' => 'The combination of Address ID, Reference Table and Reference ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address_reference_id' => Yii::t('app', 'Address Reference ID'),
            'address_id' => Yii::t('app', 'Address ID'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'reference_id' => Yii::t('app', 'Reference ID'),
            'status' => Yii::t('app', 'Status'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
    public function getAddress() {
        return $this->hasOne(\common\modules\address\models\Address::className(),
                ['address_id' => 'reference_id']);
    }
}
