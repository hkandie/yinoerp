<?php

namespace common\modules\org\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\org\models\Org;

/**
 * OrgSearch represents the model behind the search form about `common\modules\org\models\Org`.
 */
class OrgSearch extends Org
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'enterprise_org_id', 'legal_org_id', 'business_org_id', 'inventory_org_id', 'ef_id', 'rev_number', 'address_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['org', 'code', 'type', 'description', 'status', 'rev_enabled', 'creation_date', 'last_update_date'], 'safe'],
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
        $query = Org::find();

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
            'org_id' => $this->org_id,
            'enterprise_org_id' => $this->enterprise_org_id,
            'legal_org_id' => $this->legal_org_id,
            'business_org_id' => $this->business_org_id,
            'inventory_org_id' => $this->inventory_org_id,
            'ef_id' => $this->ef_id,
            'rev_number' => $this->rev_number,
            'address_id' => $this->address_id,
            'created_by' => $this->created_by,
            'creation_date' => $this->creation_date,
            'last_update_by' => $this->last_update_by,
            'last_update_date' => $this->last_update_date,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'org', $this->org])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'rev_enabled', $this->rev_enabled]);

        return $dataProvider;
    }
}
