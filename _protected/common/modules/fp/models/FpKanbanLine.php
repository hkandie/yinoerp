<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_kanban_line}}".
 *
 * @property string $fp_kanban_line_id
 * @property integer $fp_kanban_header_id
 * @property string $description
 * @property string $card_number
 * @property integer $replenish_cb
 * @property string $card_status
 * @property string $supply_status
 * @property string $kanban_size
 * @property string $card_type
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpKanbanLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_kanban_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_kanban_header_id', 'card_type', 'created_by', 'last_update_by'], 'required'],
            [['fp_kanban_header_id', 'replenish_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['kanban_size'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['card_number', 'card_status', 'supply_status', 'card_type'], 'string', 'max' => 25],
            [['card_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_kanban_line_id' => Yii::t('app', 'Fp Kanban Line ID'),
            'fp_kanban_header_id' => Yii::t('app', 'Fp Kanban Header ID'),
            'description' => Yii::t('app', 'Description'),
            'card_number' => Yii::t('app', 'Card Number'),
            'replenish_cb' => Yii::t('app', 'Replenish Cb'),
            'card_status' => Yii::t('app', 'Card Status'),
            'supply_status' => Yii::t('app', 'Supply Status'),
            'kanban_size' => Yii::t('app', 'Kanban Size'),
            'card_type' => Yii::t('app', 'Card Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
