<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "convenio".
 *
 * @property int $id_clinica_convenio
 * @property int $id_convenio
 * @property string $institucion_convenio
 * @property int $dcto_convenio
 * @property string $validodesde_convenio
 * @property string $validohasta_convenio
 *
 * @property Atiende[] $atiendes
 */
class Convenio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'convenio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_convenio', 'institucion_convenio', 'dcto_convenio'], 'required'],
            [['id_clinica_convenio', 'dcto_convenio'], 'integer'],
            [['validodesde_convenio', 'validohasta_convenio'], 'safe'],
            [['institucion_convenio'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clinica_convenio' => 'Id Clinica Convenio',
            'id_convenio' => 'Id Convenio',
            'institucion_convenio' => 'Institucion Convenio',
            'dcto_convenio' => 'Dcto Convenio',
            'validodesde_convenio' => 'Validodesde Convenio',
            'validohasta_convenio' => 'Validohasta Convenio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtiendes()
    {
        return $this->hasMany(Atiende::className(), ['id_convenio' => 'id_convenio']);
    }
}
