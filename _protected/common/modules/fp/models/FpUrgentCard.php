<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_urgent_card}}".
 *
 * @property integer $fp_urgent_card_id
 * @property resource $card_details
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpUrgentCard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_urgent_card}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['card_details'], 'string'],
            [['created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_urgent_card_id' => Yii::t('app', 'Fp Urgent Card ID'),
            'card_details' => Yii::t('app', 'Card Details'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
