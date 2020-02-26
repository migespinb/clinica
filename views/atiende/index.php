<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AtiendeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Atiendes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atiende-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Atiende', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_paciente',
            'id_servicio',
            'id_pieza',
            'id_convenio',
            'id_medio',
            //'id_clinica_atiende',
            //'fecha_atiende',
            //'descripcion_atiende',
            //'receta_atiende',
            //'proxcita_atiende',
            //'dcto_atiende',
            //'valordcto_atiende',
            //'total_atiende',
            //'estado_atiende',
            //'usuario_atiende',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
