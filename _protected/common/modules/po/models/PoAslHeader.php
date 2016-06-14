<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_asl_header}}".
 *
 * @property integer $po_asl_header_id
 * @property integer $bu_org_id
 * @property string $asl_type
 * @property integer $item_id_m
 * @property integer $item_category_id
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoAslHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_asl_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'item_id_m', 'item_category_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['asl_type', 'description', 'created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['asl_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['bu_org_id', 'asl_type', 'item_id_m'], 'unique', 'targetAttribute' => ['bu_org_id', 'asl_type', 'item_id_m'], 'message' => 'The combination of Bu Org ID, Asl Type and Item Id M has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_asl_header_id' => Yii::t('app', 'Po Asl Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'asl_type' => Yii::t('app', 'Asl Type'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_category_id' => Yii::t('app', 'Item Category ID'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
