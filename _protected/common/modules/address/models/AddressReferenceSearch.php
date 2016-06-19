<?php

namespace common\modules\address\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\address\models\AddressReference;

/**
 * AddressReferenceSearch represents the model behind the search form about `common\modules\address\models\AddressReference`.
 */
class AddressReferenceSearch extends AddressReference
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address_reference_id', 'address_id', 'reference_id', 'company_id'], 'integer'],
            [['reference_table', 'status'], 'safe'],
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
        $query = AddressReference::find();

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
            'address_reference_id' => $this->address_reference_id,
            'address_id' => $this->address_id,
            'reference_id' => $this->reference_id,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'reference_table', $this->reference_table])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
