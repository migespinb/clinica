<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PiezaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Piezas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pieza-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pieza', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_clinica_pieza',
            'id_pieza',
            'nombre_pieza',
            'descripcion_pieza',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
