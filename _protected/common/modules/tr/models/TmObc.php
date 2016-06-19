<?php

namespace common\modules\tr\models;

use Yii;

/**
 * This is the model class for table "{{%tm_obc}}".
 *
 * @property integer $id
 * @property string $startshipping_date
 * @property string $endshipping_date
 * @property string $from_airport
 * @property string $from_city
 * @property string $from_country
 * @property string $to_airport
 * @property string $to_city
 * @property string $to_country
 * @property string $courier_name
 * @property string $user_name
 * @property integer $weight
 * @property integer $volume
 * @property string $airliner
 * @property string $flight_number
 * @property string $cargo_type
 * @property string $tx_date
 * @property double $price
 * @property integer $package_type
 * @property string $currency
 * @property string $obc_id
 * @property integer $company_id
 */
class TmObc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tm_obc}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['startshipping_date', 'endshipping_date', 'tx_date'], 'safe'],
            [['from_airport', 'from_city', 'from_country', 'to_airport', 'to_city', 'to_country'], 'string'],
            [['weight', 'volume', 'package_type', 'company_id'], 'integer'],
            [['price'], 'number'],
            [['obc_id'], 'required'],
            [['courier_name', 'user_name'], 'string', 'max' => 15],
            [['airliner', 'cargo_type'], 'string', 'max' => 200],
            [['flight_number'], 'string', 'max' => 100],
            [['currency'], 'string', 'max' => 3],
            [['obc_id'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'startshipping_date' => Yii::t('app', 'Startshipping Date'),
            'endshipping_date' => Yii::t('app', 'Endshipping Date'),
            'from_airport' => Yii::t('app', 'From Airport'),
            'from_city' => Yii::t('app', 'From City'),
            'from_country' => Yii::t('app', 'From Country'),
            'to_airport' => Yii::t('app', 'To Airport'),
            'to_city' => Yii::t('app', 'To City'),
            'to_country' => Yii::t('app', 'To Country'),
            'courier_name' => Yii::t('app', 'Courier Name'),
            'user_name' => Yii::t('app', 'User Name'),
            'weight' => Yii::t('app', 'Weight'),
            'volume' => Yii::t('app', 'Volume'),
            'airliner' => Yii::t('app', 'Airliner'),
            'flight_number' => Yii::t('app', 'Flight Number'),
            'cargo_type' => Yii::t('app', 'Cargo Type'),
            'tx_date' => Yii::t('app', 'Tx Date'),
            'price' => Yii::t('app', 'Price'),
            'package_type' => Yii::t('app', 'Package Type'),
            'currency' => Yii::t('app', 'Currency'),
            'obc_id' => Yii::t('app', 'Obc ID'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
    public static function get_obc_id() {
        $txid=TmCargo::find()->select("obc_id")->order_by("obc_id desc")->one();
        if ($txid) {
            $txid = $txid->obc_id++;
            $c = substr($txid, strlen($txid) - 4);
            $c++;
            while (strpos($c, 'o') == true || strpos($c, '0') == true || strpos($c, 'O') == true || strpos($c, 'I') == true || strpos($c, '1') == true) {
                $c++;
            }
            $txid = "O" . date("yM") . $c;
        } else {
            $txid = "O" . date("yM") . "2" . "AAA";
        }

        return strtoupper($txid);
    }
}
