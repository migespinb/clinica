<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_clinica_mail')->textInput() ?>

    <?= $form->field($model, 'id_cita')->textInput() ?>

    <?= $form->field($model, 'id_paciente')->textInput() ?>

    <?= $form->field($model, 'tipo_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_mail')->textInput() ?>

    <?= $form->field($model, 'motivo_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mensaje_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_mail')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
