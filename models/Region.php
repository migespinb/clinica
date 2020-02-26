<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $id_region
 * @property string $nom_region
 * @property int $orden
 * @property string $nom_corto
 *
 * @property Clinica[] $clinicas
 * @property Comuna[] $comunas
 * @property Paciente[] $pacientes
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orden'], 'integer'],
            [['nom_region'], 'string', 'max' => 150],
            [['nom_corto'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_region' => 'Id Region',
            'nom_region' => 'Nom Region',
            'orden' => 'Orden',
            'nom_corto' => 'Nom Corto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClinicas()
    {
        return $this->hasMany(Clinica::className(), ['id_region' => 'id_region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComunas()
    {
        return $this->hasMany(Comuna::className(), ['id_region' => 'id_region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPacientes()
    {
        return $this->hasMany(Paciente::className(), ['id_region' => 'id_region']);
    }
}
