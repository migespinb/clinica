<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Atiende */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atiende-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_paciente')->textInput() ?>

    <?= $form->field($model, 'id_servicio')->textInput() ?>

    <?= $form->field($model, 'id_pieza')->textInput() ?>

    <?= $form->field($model, 'id_convenio')->textInput() ?>

    <?= $form->field($model, 'id_medio')->textInput() ?>

    <?= $form->field($model, 'id_clinica_atiende')->textInput() ?>

    <?= $form->field($model, 'fecha_atiende')->textInput() ?>

    <?= $form->field($model, 'descripcion_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receta_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proxcita_atiende')->textInput() ?>

    <?= $form->field($model, 'dcto_atiende')->textInput() ?>

    <?= $form->field($model, 'valordcto_atiende')->textInput() ?>

    <?= $form->field($model, 'total_atiende')->textInput() ?>

    <?= $form->field($model, 'estado_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_atiende')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
