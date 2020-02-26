<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asociado */

$this->title = 'Create Asociado';
$this->params['breadcrumbs'][] = ['label' => 'Asociados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asociado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
