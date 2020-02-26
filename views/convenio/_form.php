<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Convenio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convenio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_clinica_convenio')->textInput() ?>

    <?= $form->field($model, 'institucion_convenio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dcto_convenio')->textInput() ?>

    <?= $form->field($model, 'validodesde_convenio')->textInput() ?>

    <?= $form->field($model, 'validohasta_convenio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
