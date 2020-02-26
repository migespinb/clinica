<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_clinica_documento') ?>

    <?= $form->field($model, 'id_documento') ?>

    <?= $form->field($model, 'id_paciente') ?>

    <?= $form->field($model, 'fecha_documento') ?>

    <?= $form->field($model, 'nombre_documento') ?>

    <?php // echo $form->field($model, 'ubicacion_documento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
