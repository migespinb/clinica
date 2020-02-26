<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Servicio;

/**
 * ServicioSearch represents the model behind the search form of `app\models\Servicio`.
 */
class ServicioSearch extends Servicio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_servicio', 'id_servicio', 'valor_servicio', 'ofertadcto_servicio'], 'integer'],
            [['nombre_servicio', 'validodesde_servicio', 'validohasta_servicio'], 'safe'],
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
        $query = Servicio::find();

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
            'id_clinica_servicio' => $this->id_clinica_servicio,
            'id_servicio' => $this->id_servicio,
            'valor_servicio' => $this->valor_servicio,
            'ofertadcto_servicio' => $this->ofertadcto_servicio,
            'validodesde_servicio' => $this->validodesde_servicio,
            'validohasta_servicio' => $this->validohasta_servicio,
        ]);

        $query->andFilterWhere(['like', 'nombre_servicio', $this->nombre_servicio]);

        return $dataProvider;
    }
}
