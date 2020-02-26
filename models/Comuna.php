<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comuna".
 *
 * @property int $id_comuna
 * @property string $nom_comuna
 * @property int $id_region
 *
 * @property Clinica[] $clinicas
 * @property Region $region
 * @property Paciente[] $pacientes
 */
class Comuna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comuna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_region'], 'integer'],
            [['nom_comuna'], 'string', 'max' => 150],
            [['id_region'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['id_region' => 'id_region']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_comuna' => 'Id Comuna',
            'nom_comuna' => 'Nom Comuna',
            'id_region' => 'Id Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClinicas()
    {
        return $this->hasMany(Clinica::className(), ['id_comuna' => 'id_comuna']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id_region' => 'id_region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPacientes()
    {
        return $this->hasMany(Paciente::className(), ['id_comuna' => 'id_comuna']);
    }
}
