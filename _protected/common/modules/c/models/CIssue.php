<?php

namespace common\modules\c\models;

use Yii;

/**
 * This is the model class for table "{{%c_issue}}".
 *
 * @property integer $content_id
 * @property string $priority
 * @property string $category
 * @property string $component
 * @property string $status
 * @property string $content
 * @property string $testabab
 * @property integer $company_id
 */
class CIssue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%c_issue}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_id'], 'required'],
            [['content_id', 'company_id'], 'integer'],
            [['content', 'testabab'], 'string'],
            [['priority', 'category', 'component', 'status'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'content_id' => Yii::t('app', 'Content ID'),
            'priority' => Yii::t('app', 'Priority'),
            'category' => Yii::t('app', 'Category'),
            'component' => Yii::t('app', 'Component'),
            'status' => Yii::t('app', 'Status'),
            'content' => Yii::t('app', 'Content'),
            'testabab' => Yii::t('app', 'Testabab'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
