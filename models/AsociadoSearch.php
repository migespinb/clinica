<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asociado;

/**
 * AsociadoSearch represents the model behind the search form of `app\models\Asociado`.
 */
class AsociadoSearch extends Asociado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pieza', 'id_servicio', 'id_clinica_asociado'], 'integer'],
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
        $query = Asociado::find();

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
            'id_pieza' => $this->id_pieza,
            'id_servicio' => $this->id_servicio,
            'id_clinica_asociado' => $this->id_clinica_asociado,
        ]);

        return $dataProvider;
    }
}
