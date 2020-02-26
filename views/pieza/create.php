<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pieza */

$this->title = 'Create Pieza';
$this->params['breadcrumbs'][] = ['label' => 'Piezas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pieza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
