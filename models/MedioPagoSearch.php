<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MedioPago;

/**
 * MedioPagoSearch represents the model behind the search form of `app\models\MedioPago`.
 */
class MedioPagoSearch extends MedioPago
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_medio', 'id_medio'], 'integer'],
            [['nombre_medio', 'validodesde_medio', 'validohasta_medio'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = MedioPago::find();

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
            'id_clinica_medio' => $this->id_clinica_medio,
            'id_medio' => $this->id_medio,
            'validodesde_medio' => $this->validodesde_medio,
            'validohasta_medio' => $this->validohasta_medio,
        ]);

        $query->andFilterWhere(['like', 'nombre_medio', $this->nombre_medio]);

        return $dataProvider;
    }
}
