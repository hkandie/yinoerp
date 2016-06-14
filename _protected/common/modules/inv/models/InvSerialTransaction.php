<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_serial_transaction}}".
 *
 * @property integer $inv_serial_transaction_id
 * @property integer $inv_transaction_id
 * @property integer $inv_serial_number_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvSerialTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_serial_transaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_transaction_id', 'inv_serial_number_id', 'created_by', 'last_update_by'], 'required'],
            [['inv_transaction_id', 'inv_serial_number_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_serial_transaction_id' => Yii::t('app', 'Inv Serial Transaction ID'),
            'inv_transaction_id' => Yii::t('app', 'Inv Transaction ID'),
            'inv_serial_number_id' => Yii::t('app', 'Inv Serial Number ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
