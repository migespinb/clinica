<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cita".
 *
 * @property int $id_clinica_cita
 * @property int $id_cita
 * @property int $id_paciente
 * @property string $fsolicitud_cita
 * @property string $motivo_cita
 * @property string $ftentativa_cita
 * @property string $especialista_cita
 * @property string $confirma_cita
 * @property string $asiste_cita
 *
 * @property Paciente $paciente
 * @property Mail[] $mails
 */
class Cita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_cita', 'id_paciente', 'fsolicitud_cita', 'motivo_cita', 'ftentativa_cita'], 'required'],
            [['id_clinica_cita', 'id_paciente'], 'integer'],
            [['fsolicitud_cita', 'ftentativa_cita'], 'safe'],
            [['motivo_cita', 'especialista_cita'], 'string', 'max' => 200],
            [['confirma_cita', 'asiste_cita'], 'string', 'max' => 25],
            [['id_paciente'], 'exist', 'skipOnError' => true, 'targetClass' => Paciente::className(), 'targetAttribute' => ['id_paciente' => 'id_paciente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clinica_cita' => 'Id Clinica Cita',
            'id_cita' => 'Id Cita',
            'id_paciente' => 'Id Paciente',
            'fsolicitud_cita' => 'Fsolicitud Cita',
            'motivo_cita' => 'Motivo Cita',
            'ftentativa_cita' => 'Ftentativa Cita',
            'especialista_cita' => 'Especialista Cita',
            'confirma_cita' => 'Confirma Cita',
            'asiste_cita' => 'Asiste Cita',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Paciente::className(), ['id_paciente' => 'id_paciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMails()
    {
        return $this->hasMany(Mail::className(), ['id_cita' => 'id_cita']);
    }
}
