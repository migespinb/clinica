<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Convenio;

/**
 * ConvenioSearch represents the model behind the search form of `app\models\Convenio`.
 */
class ConvenioSearch extends Convenio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_convenio', 'id_convenio', 'dcto_convenio'], 'integer'],
            [['institucion_convenio', 'validodesde_convenio', 'validohasta_convenio'], 'safe'],
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
        $query = Convenio::find();

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
            'id_clinica_convenio' => $this->id_clinica_convenio,
            'id_convenio' => $this->id_convenio,
            'dcto_convenio' => $this->dcto_convenio,
            'validodesde_convenio' => $this->validodesde_convenio,
            'validohasta_convenio' => $this->validohasta_convenio,
        ]);

        $query->andFilterWhere(['like', 'institucion_convenio', $this->institucion_convenio]);

        return $dataProvider;
    }
}
