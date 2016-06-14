<?php

namespace common\modules\block\models;

use Yii;

/**
 * This is the model class for table "{{%block_cache}}".
 *
 * @property integer $block_id
 * @property string $session_id
 * @property resource $block_data
 * @property integer $company_id
 */
class BlockCache extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%block_cache}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['block_id', 'session_id'], 'required'],
            [['block_id', 'company_id'], 'integer'],
            [['block_data'], 'string'],
            [['session_id'], 'string', 'max' => 128],
            [['block_id', 'session_id'], 'unique', 'targetAttribute' => ['block_id', 'session_id'], 'message' => 'The combination of Block ID and Session ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'block_id' => Yii::t('app', 'Block ID'),
            'session_id' => Yii::t('app', 'Session ID'),
            'block_data' => Yii::t('app', 'Block Data'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
