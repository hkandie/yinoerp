<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_recipe_line}}".
 *
 * @property string $pm_recipe_line_id
 * @property integer $pm_recipe_header_id
 * @property integer $org_id
 * @property string $org_type
 * @property string $planned_loss
 * @property integer $fixed_loss_uom_id
 * @property string $fixed_loss
 * @property string $description
 * @property integer $contiguous_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmRecipeLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_recipe_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_recipe_header_id', 'org_id', 'created_by', 'last_update_by'], 'required'],
            [['pm_recipe_header_id', 'org_id', 'fixed_loss_uom_id', 'contiguous_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['planned_loss', 'fixed_loss'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['org_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['pm_recipe_header_id', 'org_id'], 'unique', 'targetAttribute' => ['pm_recipe_header_id', 'org_id'], 'message' => 'The combination of Pm Recipe Header ID and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_recipe_line_id' => Yii::t('app', 'Pm Recipe Line ID'),
            'pm_recipe_header_id' => Yii::t('app', 'Pm Recipe Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'org_type' => Yii::t('app', 'Org Type'),
            'planned_loss' => Yii::t('app', 'Planned Loss'),
            'fixed_loss_uom_id' => Yii::t('app', 'Fixed Loss Uom ID'),
            'fixed_loss' => Yii::t('app', 'Fixed Loss'),
            'description' => Yii::t('app', 'Description'),
            'contiguous_cb' => Yii::t('app', 'Contiguous Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
