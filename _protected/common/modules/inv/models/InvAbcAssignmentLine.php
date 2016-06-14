<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_abc_assignment_line}}".
 *
 * @property integer $inv_abc_assignment_line_id
 * @property integer $inv_abc_assignment_header_id
 * @property integer $item_id_m
 * @property string $abc_class
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvAbcAssignmentLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_abc_assignment_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_abc_assignment_header_id', 'item_id_m', 'abc_class', 'created_by', 'last_update_by'], 'required'],
            [['inv_abc_assignment_header_id', 'item_id_m', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['abc_class'], 'string', 'max' => 2],
            [['description'], 'string', 'max' => 256],
            [['inv_abc_assignment_header_id', 'item_id_m'], 'unique', 'targetAttribute' => ['inv_abc_assignment_header_id', 'item_id_m'], 'message' => 'The combination of Inv Abc Assignment Header ID and Item Id M has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_abc_assignment_line_id' => Yii::t('app', 'Inv Abc Assignment Line ID'),
            'inv_abc_assignment_header_id' => Yii::t('app', 'Inv Abc Assignment Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'abc_class' => Yii::t('app', 'Abc Class'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
