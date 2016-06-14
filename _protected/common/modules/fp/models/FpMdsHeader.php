<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mds_header}}".
 *
 * @property integer $org_id
 * @property string $mds_name
 * @property string $description
 * @property integer $fp_source_list_header_id
 * @property integer $include_so_cb
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $fp_mds_header_id
 * @property integer $company_id
 */
class FpMdsHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mds_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'mds_name', 'description', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'fp_source_list_header_id', 'include_so_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['mds_name', 'status'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['org_id', 'mds_name'], 'unique', 'targetAttribute' => ['org_id', 'mds_name'], 'message' => 'The combination of Org ID and Mds Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'org_id' => Yii::t('app', 'Org ID'),
            'mds_name' => Yii::t('app', 'Mds Name'),
            'description' => Yii::t('app', 'Description'),
            'fp_source_list_header_id' => Yii::t('app', 'Fp Source List Header ID'),
            'include_so_cb' => Yii::t('app', 'Include So Cb'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'fp_mds_header_id' => Yii::t('app', 'Fp Mds Header ID'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
