<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_depreciation_header}}".
 *
 * @property string $fa_depreciation_header_id
 * @property integer $fa_asset_book_id
 * @property integer $gl_period_id
 * @property string $status
 * @property string $description
 * @property integer $gl_journal_header_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaDepreciationHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_depreciation_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_asset_book_id', 'gl_period_id', 'created_by', 'last_update_by'], 'required'],
            [['fa_asset_book_id', 'gl_period_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['status'], 'string', 'max' => 15],
            [['description'], 'string', 'max' => 256],
            [['fa_asset_book_id', 'gl_period_id'], 'unique', 'targetAttribute' => ['fa_asset_book_id', 'gl_period_id'], 'message' => 'The combination of Fa Asset Book ID and Gl Period ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_depreciation_header_id' => Yii::t('app', 'Fa Depreciation Header ID'),
            'fa_asset_book_id' => Yii::t('app', 'Fa Asset Book ID'),
            'gl_period_id' => Yii::t('app', 'Gl Period ID'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
