<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_resource}}".
 *
 * @property integer $bom_resource_id
 * @property string $resource
 * @property string $description
 * @property integer $org_id
 * @property string $status
 * @property string $resource_type
 * @property string $charge_type
 * @property integer $uom
 * @property string $basis
 * @property integer $osp_cb
 * @property integer $osp_item_id
 * @property integer $costed_cb
 * @property integer $standard_rate_cb
 * @property integer $absorption_ac_id
 * @property integer $variance_ac_id
 * @property string $overheads
 * @property integer $rate_reference_id
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomResource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_resource}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resource', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['org_id', 'uom', 'osp_cb', 'osp_item_id', 'costed_cb', 'standard_rate_cb', 'absorption_ac_id', 'variance_ac_id', 'rate_reference_id', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['resource', 'basis', 'overheads'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['status', 'resource_type', 'charge_type'], 'string', 'max' => 12],
            [['resource', 'org_id'], 'unique', 'targetAttribute' => ['resource', 'org_id'], 'message' => 'The combination of Resource and Org ID has already been taken.'],
            [['resource', 'description'], 'unique', 'targetAttribute' => ['resource', 'description'], 'message' => 'The combination of Resource and Description has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_resource_id' => Yii::t('app', 'Bom Resource ID'),
            'resource' => Yii::t('app', 'Resource'),
            'description' => Yii::t('app', 'Description'),
            'org_id' => Yii::t('app', 'Org ID'),
            'status' => Yii::t('app', 'Status'),
            'resource_type' => Yii::t('app', 'Resource Type'),
            'charge_type' => Yii::t('app', 'Charge Type'),
            'uom' => Yii::t('app', 'Uom'),
            'basis' => Yii::t('app', 'Basis'),
            'osp_cb' => Yii::t('app', 'Osp Cb'),
            'osp_item_id' => Yii::t('app', 'Osp Item ID'),
            'costed_cb' => Yii::t('app', 'Costed Cb'),
            'standard_rate_cb' => Yii::t('app', 'Standard Rate Cb'),
            'absorption_ac_id' => Yii::t('app', 'Absorption Ac ID'),
            'variance_ac_id' => Yii::t('app', 'Variance Ac ID'),
            'overheads' => Yii::t('app', 'Overheads'),
            'rate_reference_id' => Yii::t('app', 'Rate Reference ID'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
