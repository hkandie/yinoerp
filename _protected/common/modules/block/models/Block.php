<?php

namespace common\modules\block\models;

use Yii;

/**
 * This is the model class for table "block".
 *
 * @property string $block_id
 * @property string $reference_table
 * @property string $name
 * @property integer $reference_key_value
 * @property integer $enabled_cb
 * @property integer $cached_cb
 * @property string $restrict_to_role
 * @property integer $visibility_option
 * @property string $visibility
 * @property integer $visibility_php_cb
 * @property string $title
 * @property integer $show_title_cb
 * @property double $rev_enabled_cb
 * @property integer $rev_number
 * @property string $position
 * @property integer $weight
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class Block extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'block';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_key_value', 'enabled_cb', 'cached_cb', 'visibility_option', 'visibility_php_cb', 'show_title_cb', 'rev_number', 'weight', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['visibility'], 'string'],
            [['title', 'created_by', 'last_update_by'], 'required'],
            [['rev_enabled_cb'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['reference_table', 'name', 'position'], 'string', 'max' => 50],
            [['restrict_to_role'], 'string', 'max' => 25],
            [['title'], 'string', 'max' => 256],
            [['reference_table', 'name', 'reference_key_value'], 'unique', 'targetAttribute' => ['reference_table', 'name', 'reference_key_value'], 'message' => 'The combination of Reference Table, Name and Reference Key Value has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'block_id' => Yii::t('app', 'Block ID'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'name' => Yii::t('app', 'Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'cached_cb' => Yii::t('app', 'Cached Cb'),
            'restrict_to_role' => Yii::t('app', 'Restrict To Role'),
            'visibility_option' => Yii::t('app', 'Visibility Option'),
            'visibility' => Yii::t('app', 'Visibility'),
            'visibility_php_cb' => Yii::t('app', 'Visibility Php Cb'),
            'title' => Yii::t('app', 'Title'),
            'show_title_cb' => Yii::t('app', 'Show Title Cb'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'position' => Yii::t('app', 'Position'),
            'weight' => Yii::t('app', 'Weight'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
