<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_header}}".
 *
 * @property integer $bom_header_id
 * @property integer $item_id_m
 * @property string $alternate_bom
 * @property integer $org_id
 * @property string $bom_revision
 * @property string $effective_date
 * @property integer $common_bom_item_id_m
 * @property integer $common_bom_org_id
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id_m', 'org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['item_id_m', 'org_id', 'common_bom_item_id_m', 'common_bom_org_id', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_date', 'creation_date', 'last_update_date'], 'safe'],
            [['alternate_bom'], 'string', 'max' => 50],
            [['bom_revision'], 'string', 'max' => 12],
            [['item_id_m', 'org_id'], 'unique', 'targetAttribute' => ['item_id_m', 'org_id'], 'message' => 'The combination of Item Id M and Org ID has already been taken.'],
            [['item_id_m', 'alternate_bom'], 'unique', 'targetAttribute' => ['item_id_m', 'alternate_bom'], 'message' => 'The combination of Item Id M and Alternate Bom has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_header_id' => Yii::t('app', 'Bom Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'alternate_bom' => Yii::t('app', 'Alternate Bom'),
            'org_id' => Yii::t('app', 'Org ID'),
            'bom_revision' => Yii::t('app', 'Bom Revision'),
            'effective_date' => Yii::t('app', 'Effective Date'),
            'common_bom_item_id_m' => Yii::t('app', 'Common Bom Item Id M'),
            'common_bom_org_id' => Yii::t('app', 'Common Bom Org ID'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
