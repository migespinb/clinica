<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asociado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asociado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pieza')->textInput() ?>

    <?= $form->field($model, 'id_servicio')->textInput() ?>

    <?= $form->field($model, 'id_clinica_asociado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
