<?php

namespace common\modules\tr\models;

use Yii;

/**
 * This is the model class for table "{{%tm_transport}}".
 *
 * @property integer $id
 * @property string $user_id
 * @property string $departure_date
 * @property string $arrival_date
 * @property string $startshipping_date
 * @property string $endshipping_date
 * @property string $from_city
 * @property string $from_country
 * @property string $to_city
 * @property string $to_country
 * @property string $price
 * @property string $currency
 * @property string $transport_type
 * @property string $container_type
 * @property string $weight
 * @property string $volume
 * @property string $length
 * @property string $height
 * @property string $width
 * @property string $airfreight_security
 * @property string $shipper
 * @property string $description
 * @property string $notes
 * @property string $tx_date
 * @property string $transport_ID
 * @property string $awb
 * @property string $airfreight_security_type
 * @property integer $company_id
 */
class TmTransport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tm_transport}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['departure_date', 'arrival_date', 'startshipping_date', 'endshipping_date', 'container_type', 'airfreight_security', 'shipper', 'notes', 'transport_ID'], 'required'],
            [['departure_date', 'arrival_date', 'startshipping_date', 'endshipping_date', 'tx_date'], 'safe'],
            [['from_city', 'from_country', 'to_city', 'to_country', 'transport_type', 'container_type', 'weight', 'volume', 'airfreight_security', 'shipper', 'description', 'notes', 'transport_ID', 'awb'], 'string'],
            [['price'], 'number'],
            [['company_id'], 'integer'],
            [['user_id', 'length', 'height', 'width'], 'string', 'max' => 20],
            [['currency'], 'string', 'max' => 30],
            [['airfreight_security_type'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'departure_date' => Yii::t('app', 'Departure Date'),
            'arrival_date' => Yii::t('app', 'Arrival Date'),
            'startshipping_date' => Yii::t('app', 'Startshipping Date'),
            'endshipping_date' => Yii::t('app', 'Endshipping Date'),
            'from_city' => Yii::t('app', 'From City'),
            'from_country' => Yii::t('app', 'From Country'),
            'to_city' => Yii::t('app', 'To City'),
            'to_country' => Yii::t('app', 'To Country'),
            'price' => Yii::t('app', 'Price'),
            'currency' => Yii::t('app', 'Currency'),
            'transport_type' => Yii::t('app', 'Transport Type'),
            'container_type' => Yii::t('app', 'Container Type'),
            'weight' => Yii::t('app', 'Weight'),
            'volume' => Yii::t('app', 'Volume'),
            'length' => Yii::t('app', 'Length'),
            'height' => Yii::t('app', 'Height'),
            'width' => Yii::t('app', 'Width'),
            'airfreight_security' => Yii::t('app', 'Airfreight Security'),
            'shipper' => Yii::t('app', 'Shipper'),
            'description' => Yii::t('app', 'Description'),
            'notes' => Yii::t('app', 'Notes'),
            'tx_date' => Yii::t('app', 'Tx Date'),
            'transport_ID' => Yii::t('app', 'Transport  ID'),
            'awb' => Yii::t('app', 'Awb'),
            'airfreight_security_type' => Yii::t('app', 'Airfreight Security Type'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
    public static function get_transation_id() {
        $txid=TmCargo::find()->select("transaction_id")->order_by("transaction_id desc")->one();
        if ($txid) {
            $txid = $txid->transaction_id++;
            $c = substr($txid, strlen($txid) - 4);
            $c++;
            while (strpos($c, 'o') == true || strpos($c, '0') == true || strpos($c, 'O') == true || strpos($c, 'I') == true || strpos($c, '1') == true) {
                $c++;
            }
            $txid = "C" . date("yM") . $c;
        } else {
            $txid = "T" . date("yM") . "2" . "AAA";
        }

        return strtoupper($txid);
    }
}
