<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_sourcing_rule_line}}".
 *
 * @property integer $po_sourcing_rule_line_id
 * @property integer $po_sourcing_rule_header_id
 * @property string $sourcing_type
 * @property integer $source_from_org_id
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property string $allocation
 * @property integer $rank
 * @property integer $transit_time
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoSourcingRuleLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_sourcing_rule_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_sourcing_rule_header_id', 'sourcing_type', 'rank', 'created_by', 'last_update_by'], 'required'],
            [['po_sourcing_rule_header_id', 'source_from_org_id', 'supplier_id', 'supplier_site_id', 'rank', 'transit_time', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['allocation'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['sourcing_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_sourcing_rule_line_id' => Yii::t('app', 'Po Sourcing Rule Line ID'),
            'po_sourcing_rule_header_id' => Yii::t('app', 'Po Sourcing Rule Header ID'),
            'sourcing_type' => Yii::t('app', 'Sourcing Type'),
            'source_from_org_id' => Yii::t('app', 'Source From Org ID'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'allocation' => Yii::t('app', 'Allocation'),
            'rank' => Yii::t('app', 'Rank'),
            'transit_time' => Yii::t('app', 'Transit Time'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
