<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_routing_header}}".
 *
 * @property integer $bom_routing_header_id
 * @property integer $item_id_m
 * @property string $alternate_routing
 * @property integer $org_id
 * @property string $routing_revision
 * @property string $effective_date
 * @property integer $common_routing_item_id_m
 * @property integer $description
 * @property integer $completion_subinventory
 * @property integer $completion_locator
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomRoutingHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_routing_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id_m', 'org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['item_id_m', 'org_id', 'common_routing_item_id_m', 'description', 'completion_subinventory', 'completion_locator', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_date', 'creation_date', 'last_update_date'], 'safe'],
            [['alternate_routing'], 'string', 'max' => 50],
            [['routing_revision'], 'string', 'max' => 10],
            [['item_id_m', 'org_id'], 'unique', 'targetAttribute' => ['item_id_m', 'org_id'], 'message' => 'The combination of Item Id M and Org ID has already been taken.'],
            [['item_id_m', 'alternate_routing'], 'unique', 'targetAttribute' => ['item_id_m', 'alternate_routing'], 'message' => 'The combination of Item Id M and Alternate Routing has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_routing_header_id' => Yii::t('app', 'Bom Routing Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'alternate_routing' => Yii::t('app', 'Alternate Routing'),
            'org_id' => Yii::t('app', 'Org ID'),
            'routing_revision' => Yii::t('app', 'Routing Revision'),
            'effective_date' => Yii::t('app', 'Effective Date'),
            'common_routing_item_id_m' => Yii::t('app', 'Common Routing Item Id M'),
            'description' => Yii::t('app', 'Description'),
            'completion_subinventory' => Yii::t('app', 'Completion Subinventory'),
            'completion_locator' => Yii::t('app', 'Completion Locator'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
