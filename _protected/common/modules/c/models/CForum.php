<?php

namespace common\modules\c\models;

use Yii;

/**
 * This is the model class for table "{{%c_forum}}".
 *
 * @property integer $content_id
 * @property string $content
 * @property integer $company_id
 */
class CForum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%c_forum}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_id'], 'required'],
            [['content_id', 'company_id'], 'integer'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'content_id' => Yii::t('app', 'Content ID'),
            'content' => Yii::t('app', 'Content'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
