<?php

namespace common\modules\tr\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\tr\models\TmObc;

/**
 * TmObcSearch represents the model behind the search form about `common\modules\tr\models\TmObc`.
 */
class TmObcSearch extends TmObc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'weight', 'volume', 'package_type', 'company_id'], 'integer'],
            [['startshipping_date', 'endshipping_date', 'from_airport', 'from_city', 'from_country', 'to_airport', 'to_city', 'to_country', 'courier_name', 'user_name', 'airliner', 'flight_number', 'cargo_type', 'tx_date', 'currency', 'obc_id'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TmObc::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'startshipping_date' => $this->startshipping_date,
            'endshipping_date' => $this->endshipping_date,
            'weight' => $this->weight,
            'volume' => $this->volume,
            'tx_date' => $this->tx_date,
            'price' => $this->price,
            'package_type' => $this->package_type,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'from_airport', $this->from_airport])
            ->andFilterWhere(['like', 'from_city', $this->from_city])
            ->andFilterWhere(['like', 'from_country', $this->from_country])
            ->andFilterWhere(['like', 'to_airport', $this->to_airport])
            ->andFilterWhere(['like', 'to_city', $this->to_city])
            ->andFilterWhere(['like', 'to_country', $this->to_country])
            ->andFilterWhere(['like', 'courier_name', $this->courier_name])
            ->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'airliner', $this->airliner])
            ->andFilterWhere(['like', 'flight_number', $this->flight_number])
            ->andFilterWhere(['like', 'cargo_type', $this->cargo_type])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'obc_id', $this->obc_id]);

        return $dataProvider;
    }
}
