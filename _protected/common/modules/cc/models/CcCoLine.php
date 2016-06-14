<?php

namespace common\modules\cc\models;

use Yii;

/**
 * This is the model class for table "{{%cc_co_line}}".
 *
 * @property integer $cc_co_line_id
 * @property integer $cc_co_header_id
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $new_revision
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class CcCoLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cc_co_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cc_co_header_id', 'item_id_m', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['cc_co_header_id', 'item_id_m', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['item_description'], 'string', 'max' => 256],
            [['new_revision'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 50],
            [['cc_co_header_id', 'item_description'], 'unique', 'targetAttribute' => ['cc_co_header_id', 'item_description'], 'message' => 'The combination of Cc Co Header ID and Item Description has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cc_co_line_id' => Yii::t('app', 'Cc Co Line ID'),
            'cc_co_header_id' => Yii::t('app', 'Cc Co Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'new_revision' => Yii::t('app', 'New Revision'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
