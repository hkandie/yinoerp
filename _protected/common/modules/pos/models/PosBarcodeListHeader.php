<?php

namespace common\modules\pos\models;

use Yii;

/**
 * This is the model class for table "{{%pos_barcode_list_header}}".
 *
 * @property integer $pos_barcode_list_header_id
 * @property string $list_name
 * @property string $description
 * @property integer $org_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PosBarcodeListHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pos_barcode_list_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['list_name', 'description', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['list_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 2],
            [['list_name', 'description'], 'unique', 'targetAttribute' => ['list_name', 'description'], 'message' => 'The combination of List Name and Description has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pos_barcode_list_header_id' => Yii::t('app', 'Pos Barcode List Header ID'),
            'list_name' => Yii::t('app', 'List Name'),
            'description' => Yii::t('app', 'Description'),
            'org_id' => Yii::t('app', 'Org ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
