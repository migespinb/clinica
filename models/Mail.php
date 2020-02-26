<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mail".
 *
 * @property int $id_clinica_mail
 * @property int $id_mail
 * @property int $id_cita
 * @property int $id_paciente
 * @property string $tipo_mail
 * @property string $fecha_mail
 * @property string $motivo_mail
 * @property string $mensaje_mail
 * @property string $estado_mail
 *
 * @property Cita $cita
 * @property Paciente $paciente
 */
class Mail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_mail', 'id_cita', 'tipo_mail', 'fecha_mail'], 'required'],
            [['id_clinica_mail', 'id_cita', 'id_paciente'], 'integer'],
            [['fecha_mail'], 'safe'],
            [['tipo_mail'], 'string', 'max' => 50],
            [['motivo_mail'], 'string', 'max' => 100],
            [['mensaje_mail'], 'string', 'max' => 1024],
            [['estado_mail'], 'string', 'max' => 25],
            [['id_cita'], 'exist', 'skipOnError' => true, 'targetClass' => Cita::className(), 'targetAttribute' => ['id_cita' => 'id_cita']],
            [['id_paciente'], 'exist', 'skipOnError' => true, 'targetClass' => Paciente::className(), 'targetAttribute' => ['id_paciente' => 'id_paciente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clinica_mail' => 'Id Clinica Mail',
            'id_mail' => 'Id Mail',
            'id_cita' => 'Id Cita',
            'id_paciente' => 'Id Paciente',
            'tipo_mail' => 'Tipo Mail',
            'fecha_mail' => 'Fecha Mail',
            'motivo_mail' => 'Motivo Mail',
            'mensaje_mail' => 'Mensaje Mail',
            'estado_mail' => 'Estado Mail',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCita()
    {
        return $this->hasOne(Cita::className(), ['id_cita' => 'id_cita']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Paciente::className(), ['id_paciente' => 'id_paciente']);
    }
}
