<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PacienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pacientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paciente-index">

    <p>
        <?= Html::a('<i class="fa fa-plus"></i>  Nuevo paciente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'headerRowOptions'=>['title'=>'Ordenar de forma ascendente, descendente'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_clinica_paciente',
            // [   'attribute'=>'id_clinica_paciente',
            //     'value'=>'clinica.nombre_clinica'],
            // 'id_paciente',
            //'rut_paciente',
            [
                // 'format'=>'html',
                'format'=>'raw',
                'attribute'=>'rut_paciente',
                'value'=>function ($model, $key, $index, $column){
                    return "<i class='fa fa-certificate text-blue'></i> ".$model->rut_paciente;
                },
            ],
            // 'nombre_paciente',
            [
                // 'format'=>'html',
                'format'=>'raw',
                'attribute'=>'nombre_paciente',
                'value'=>function ($model, $key, $index, $column){
                    return "<i class='fa fa-user text-blue'></i> ".$model->nombre_paciente;
                },
            ],
            //'fnacimiento_paciente',
            // 'sexo_paciente',
            [
                // 'format'=>'html',
                'format'=>'raw',
                'attribute'=>'sexo_paciente',
                'value'=>function ($model, $key, $index, $column){
                    $icon="fa-neuter";
                    if ($model->sexo_paciente=="Masculino") {
                        $icon="fa-mars";
                    }
                    if ($model->sexo_paciente=="Femenino") {
                        $icon="fa-venus";
                    }
                    return "<i class='fa ".$icon." text-blue'></i> ".$model->sexo_paciente;
                },
            ],
            //'alergias_paciente',
            // 'telefono_paciente',
            [
                // 'format'=>'html',
                'format'=>'raw',
                'attribute'=>'telefono_paciente',
                'value'=>function ($model, $key, $index, $column){
                    return "<i class='fa fa-phone text-blue'></i> ".$model->telefono_paciente;
                },
            ],
            //'telefono2_paciente',
            'email_paciente:email',
            // [   'attribute'=>'id_region',
            //     'value'=>region.nom_region],
            // [   'attribute'=>'id_comuna',
            //     'value'=>'comuna.nom_comuna'],
            [
                // 'format'=>'html',
                'format'=>'raw',
                'attribute'=>'id_comuna',
                'value'=>function ($model, $key, $index, $column){
                    return "<i class='fa fa-map-marker text-blue'></i> ".$model->comuna->nom_comuna;
                },
            ],
            //'direccion_paciente',

            ['class' => 'yii\grid\ActionColumn',
            'header'=>"Acción",
            'headerOptions'=>['style'=>'color:#3c8dbc', 'title'=>''],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
