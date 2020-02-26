<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedioPagoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medio Pagos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medio-pago-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Medio Pago', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_clinica_medio',
            'id_medio',
            'nombre_medio',
            'validodesde_medio',
            'validohasta_medio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
