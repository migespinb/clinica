<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedioPagoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medio-pago-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_clinica_medio') ?>

    <?= $form->field($model, 'id_medio') ?>

    <?= $form->field($model, 'nombre_medio') ?>

    <?= $form->field($model, 'validodesde_medio') ?>

    <?= $form->field($model, 'validohasta_medio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
