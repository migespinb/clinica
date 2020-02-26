<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_clinica_convenio') ?>

    <?= $form->field($model, 'id_convenio') ?>

    <?= $form->field($model, 'institucion_convenio') ?>

    <?= $form->field($model, 'dcto_convenio') ?>

    <?= $form->field($model, 'validodesde_convenio') ?>

    <?php // echo $form->field($model, 'validohasta_convenio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
