<?php

namespace common\modules\user\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "_profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $create_time
 * @property string $update_time
 * @property string $last_name
 * @property string $first_name
 * @property string $gender
 * @property string $level
 * @property string $phone
 * @property string $mobile
 * @property integer $bill_code
 * @property string $note
 * @property string $avatar
 * @property integer $page_size
 * @property string $notifications
 * @property integer $company_id
 * @property string $dept_id
 * @property integer $active
 * @property double $load_cost
 * @property double $seat_charge
 * @property double $daily_hours
 * @property string $min_hire_cost
 * @property string $max_hire_cost
 * @property string $address
 * @property string $location
 * @property string $town *
 * @property Users $user
 */
class Profile extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return static::getDb()->tablePrefix . '_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['first_name', 'last_name'], 'required'],
            [['user_id', 'bill_code', 'page_size', 'company_id', 'active'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['note', 'avatar', 'notifications','town'], 'string'],
            [['load_cost', 'seat_charge', 'daily_hours','min_hire_cost','max_hire_cost'], 'number'],
            [['daily_hours'], 'number', 'max' => 24],
            [['last_name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 12],
            [['first_name', 'level', 'phone', 'mobile'], 'string', 'max' => 63],
            [['gender'], 'string', 'max' => 1],
             [['avatar'], 'file', 'extensions' => 'jpg, jpeg, gif, png', 'skipOnEmpty' => true, 
'checkExtensionByMimeType'=>true, 'on' => 'photo-upload'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('user', 'ID'),
            'user_id' => Yii::t('user', 'User ID'),
            'create_time' => Yii::t('user', 'Create Time'),
            'update_time' => Yii::t('user', 'Update Time'),
            'last_name' => Yii::t('user', 'Last Name'),
            'first_name' => Yii::t('user', 'First Name'),
            'gender' => Yii::t('user', 'Gender'),
            'level' => Yii::t('user', 'Level'),
            'phone' => Yii::t('user', 'Phone'),
            'mobile' => Yii::t('user', 'Mobile'),
            'bill_code' => Yii::t('user', 'Bill Code'),
            'note' => Yii::t('user', 'About you'),
            'avatar' => Yii::t('user', 'Avatar'),
            'page_size' => Yii::t('user', 'Page Size'),
            'notifications' => Yii::t('user', 'Do you wish to recieve notifications'),
            'company_id' => Yii::t('user', 'Company ID'),
            'dept_id' => Yii::t('user', 'Dept ID'),
            'active' => Yii::t('user', 'Active'),
            'load_cost' => Yii::t('user', 'Load Cost'),
            'seat_charge' => Yii::t('user', 'Seat Charge'),
            'min_hire_cost' => Yii::t('user', 'Min Price Range'),
            'max_hire_cost' => Yii::t('user', 'Max Price Range'),
            'address' => Yii::t('user', 'Address'),
            'location' => Yii::t('user', 'Location'),
            'town' => Yii::t('user', 'Town'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'value' => function () {
                    return date("Y-m-d H:i:s");
                },
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'create_time',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'update_time',
                ],
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser() {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }

    /**
     * Set user id
     *
     * @param int $userId
     * @return static
     */
    public function setUser($userId) {
        $this->user_id = $userId;
        return $this;
    }

    public static function getGenderOption() {
        return [
            "M" => 'Male',
            "F" => 'Female',
            "0" => 'Not Applicable',
        ];
    }

    public static function getPageSize() {
        return [
            10 => '10 per page',
            15 => '15 per page',
            25 => '20 per page',
            30 => '30 per page',
            35 => '35 per page',
        ];
    }

    public static function getNotification() {
        return [
            1 => 'Yes',
            0 => 'No',
        ];
    }

    public static function getAvatar($imgName) {
        $dispImg = is_file(Yii::getAlias('@uploads') . '/user_images/' . $imgName) ? true : false;
        return Yii::getAlias('@uploads') . "/" . (($dispImg) ? $imgName : "no-photo.png");
    }

    public function getUserDetails() {
        return $this->hasOne(\common\modules\project\models\UserDetails::className(), ['user_id' => 'user_id']);
    }

    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

}
