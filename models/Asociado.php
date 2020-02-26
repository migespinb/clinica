<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asociado".
 *
 * @property int $id_pieza
 * @property int $id_servicio
 * @property int $id_clinica_asociado
 *
 * @property Pieza $pieza
 * @property Servicio $servicio
 */
class Asociado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asociado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pieza', 'id_servicio', 'id_clinica_asociado'], 'required'],
            [['id_pieza', 'id_servicio', 'id_clinica_asociado'], 'integer'],
            [['id_pieza', 'id_servicio'], 'unique', 'targetAttribute' => ['id_pieza', 'id_servicio']],
            [['id_pieza'], 'exist', 'skipOnError' => true, 'targetClass' => Pieza::className(), 'targetAttribute' => ['id_pieza' => 'id_pieza']],
            [['id_servicio'], 'exist', 'skipOnError' => true, 'targetClass' => Servicio::className(), 'targetAttribute' => ['id_servicio' => 'id_servicio']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pieza' => 'Id Pieza',
            'id_servicio' => 'Id Servicio',
            'id_clinica_asociado' => 'Id Clinica Asociado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPieza()
    {
        return $this->hasOne(Pieza::className(), ['id_pieza' => 'id_pieza']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicio()
    {
        return $this->hasOne(Servicio::className(), ['id_servicio' => 'id_servicio']);
    }
}
