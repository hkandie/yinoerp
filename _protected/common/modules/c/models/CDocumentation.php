<?php

namespace common\modules\c\models;

use Yii;

/**
 * This is the model class for table "{{%c_documentation}}".
 *
 * @property integer $content_id
 * @property string $content
 * @property string $chapter
 * @property integer $company_id
 */
class CDocumentation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%c_documentation}}';
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
            [['chapter'], 'string', 'max' => 256],
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
            'chapter' => Yii::t('app', 'Chapter'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
