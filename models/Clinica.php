<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clinica".
 *
 * @property int $id_clinica
 * @property int $id_region
 * @property int $id_comuna
 * @property string $nombre_clinica
 * @property string $telefono_clinica
 * @property string $telefono2_clinica
 * @property string $direccion_clinica
 * @property string $logo_clinica
 *
 * @property Region $region
 * @property Comuna $comuna
 * @property Users[] $users
 */
class Clinica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clinica';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_region', 'id_comuna'], 'required'],
            [['id_region', 'id_comuna'], 'integer'],
            [['nombre_clinica'], 'string', 'max' => 300],
            [['telefono_clinica', 'telefono2_clinica'], 'string', 'max' => 12],
            [['direccion_clinica', 'logo_clinica'], 'string', 'max' => 200],
            [['id_region'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['id_region' => 'id_region']],
            [['id_comuna'], 'exist', 'skipOnError' => true, 'targetClass' => Comuna::className(), 'targetAttribute' => ['id_comuna' => 'id_comuna']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clinica' => 'Id Clinica',
            'id_region' => 'Id Region',
            'id_comuna' => 'Id Comuna',
            'nombre_clinica' => 'Nombre Clinica',
            'telefono_clinica' => 'Telefono Clinica',
            'telefono2_clinica' => 'Telefono2 Clinica',
            'direccion_clinica' => 'Direccion Clinica',
            'logo_clinica' => 'Logo Clinica',
        ];
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
    public function getComuna()
    {
        return $this->hasOne(Comuna::className(), ['id_comuna' => 'id_comuna']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['id_clinica' => 'id_clinica']);
    }
}
