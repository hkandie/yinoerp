<?php

namespace common\modules\c\models;

use Yii;

/**
 * This is the model class for table "{{%c_collections}}".
 *
 * @property integer $content_id
 * @property string $length
 * @property string $height
 * @property integer $company_id
 */
class CCollections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%c_collections}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_id'], 'required'],
            [['content_id', 'company_id'], 'integer'],
            [['length', 'height'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'content_id' => Yii::t('app', 'Content ID'),
            'length' => Yii::t('app', 'Length'),
            'height' => Yii::t('app', 'Height'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
