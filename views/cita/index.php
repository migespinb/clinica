<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cita-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_clinica_cita',
            'id_cita',
            'id_paciente',
            'fsolicitud_cita',
            'motivo_cita',
            //'ftentativa_cita',
            //'especialista_cita',
            //'confirma_cita',
            //'asiste_cita',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
