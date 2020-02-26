<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cita;

/**
 * CitaSearch represents the model behind the search form of `app\models\Cita`.
 */
class CitaSearch extends Cita
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_cita', 'id_cita', 'id_paciente'], 'integer'],
            [['fsolicitud_cita', 'motivo_cita', 'ftentativa_cita', 'especialista_cita', 'confirma_cita', 'asiste_cita'], 'safe'],
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
        $query = Cita::find();

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
            'id_clinica_cita' => $this->id_clinica_cita,
            'id_cita' => $this->id_cita,
            'id_paciente' => $this->id_paciente,
            'fsolicitud_cita' => $this->fsolicitud_cita,
            'ftentativa_cita' => $this->ftentativa_cita,
        ]);

        $query->andFilterWhere(['like', 'motivo_cita', $this->motivo_cita])
            ->andFilterWhere(['like', 'especialista_cita', $this->especialista_cita])
            ->andFilterWhere(['like', 'confirma_cita', $this->confirma_cita])
            ->andFilterWhere(['like', 'asiste_cita', $this->asiste_cita]);

        return $dataProvider;
    }
}
