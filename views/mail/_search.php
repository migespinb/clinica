<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_clinica_mail') ?>

    <?= $form->field($model, 'id_mail') ?>

    <?= $form->field($model, 'id_cita') ?>

    <?= $form->field($model, 'id_paciente') ?>

    <?= $form->field($model, 'tipo_mail') ?>

    <?php // echo $form->field($model, 'fecha_mail') ?>

    <?php // echo $form->field($model, 'motivo_mail') ?>

    <?php // echo $form->field($model, 'mensaje_mail') ?>

    <?php // echo $form->field($model, 'estado_mail') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
