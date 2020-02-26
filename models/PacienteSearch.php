<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Paciente;

/**
 * PacienteSearch represents the model behind the search form of `app\models\Paciente`.
 */
class PacienteSearch extends Paciente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_paciente', 'id_paciente', 'id_comuna', 'id_region'], 'integer'],
            [['rut_paciente', 'nombre_paciente', 'fnacimiento_paciente', 'sexo_paciente', 'alergias_paciente', 'telefono_paciente', 'telefono2_paciente', 'email_paciente', 'direccion_paciente', 'comentario_paciente'], 'safe'],
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
        $query = Paciente::find();

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
            'id_clinica_paciente' => $this->id_clinica_paciente,
            'id_paciente' => $this->id_paciente,
            'id_comuna' => $this->id_comuna,
            'id_region' => $this->id_region,
            'fnacimiento_paciente' => $this->fnacimiento_paciente,
        ]);

        $query->andFilterWhere(['like', 'rut_paciente', $this->rut_paciente])
            ->andFilterWhere(['like', 'nombre_paciente', $this->nombre_paciente])
            ->andFilterWhere(['like', 'sexo_paciente', $this->sexo_paciente])
            ->andFilterWhere(['like', 'alergias_paciente', $this->alergias_paciente])
            ->andFilterWhere(['like', 'telefono_paciente', $this->telefono_paciente])
            ->andFilterWhere(['like', 'telefono2_paciente', $this->telefono2_paciente])
            ->andFilterWhere(['like', 'email_paciente', $this->email_paciente])
            ->andFilterWhere(['like', 'direccion_paciente', $this->direccion_paciente])
            ->andFilterWhere(['like', 'comentario_paciente', $this->comentario_paciente]);

        return $dataProvider;
    }
}
