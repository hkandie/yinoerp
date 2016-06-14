<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_cp_assignment_header}}".
 *
 * @property integer $qa_cp_assignment_header_id
 * @property integer $qa_cp_header_id
 * @property integer $inv_transaction_id
 * @property string $description
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $mandatory_cb
 * @property integer $enabled_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class QaCpAssignmentHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_cp_assignment_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qa_cp_header_id', 'inv_transaction_id', 'effective_from', 'created_by', 'last_update_by'], 'required'],
            [['qa_cp_header_id', 'inv_transaction_id', 'mandatory_cb', 'enabled_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_cp_assignment_header_id' => Yii::t('app', 'Qa Cp Assignment Header ID'),
            'qa_cp_header_id' => Yii::t('app', 'Qa Cp Header ID'),
            'inv_transaction_id' => Yii::t('app', 'Inv Transaction ID'),
            'description' => Yii::t('app', 'Description'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'mandatory_cb' => Yii::t('app', 'Mandatory Cb'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
