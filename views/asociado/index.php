<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AsociadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asociados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asociado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Asociado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pieza',
            'id_servicio',
            'id_clinica_asociado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
