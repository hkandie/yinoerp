<?php

namespace common\modules\pos\models;

use Yii;

/**
 * This is the model class for table "{{%pos_terminal}}".
 *
 * @property integer $pos_terminal_id
 * @property integer $sd_store_id
 * @property integer $location_id
 * @property string $terminal_name
 * @property string $description
 * @property integer $primary_owner_id
 * @property string $terminal_type
 * @property string $status
 * @property integer $refresh_time
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PosTerminal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pos_terminal}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sd_store_id', 'location_id', 'terminal_name', 'created_by', 'last_update_by'], 'required'],
            [['sd_store_id', 'location_id', 'primary_owner_id', 'refresh_time', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['terminal_name', 'terminal_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pos_terminal_id' => Yii::t('app', 'Pos Terminal ID'),
            'sd_store_id' => Yii::t('app', 'Sd Store ID'),
            'location_id' => Yii::t('app', 'Location ID'),
            'terminal_name' => Yii::t('app', 'Terminal Name'),
            'description' => Yii::t('app', 'Description'),
            'primary_owner_id' => Yii::t('app', 'Primary Owner ID'),
            'terminal_type' => Yii::t('app', 'Terminal Type'),
            'status' => Yii::t('app', 'Status'),
            'refresh_time' => Yii::t('app', 'Refresh Time'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
