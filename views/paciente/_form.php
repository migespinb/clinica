<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use kartik\select2\Select2;
use app\models\Region;
use app\models\Comuna;

/* @var $this yii\web\View */
/* @var $model app\models\Paciente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paciente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_clinica_paciente')->hiddenInput(['value'=>Yii::$app->user->identity->id_clinica])->label(false) ?>

    <?= $form->field($model, 'rut_paciente')->textInput(['maxlength' => true, 'placeholder'=>'12345678-K', 'disabled'=>$model->isNewRecord? false: 'disabled']) ?>

    <?= $form->field($model, 'nombre_paciente')->textInput(['maxlength' => true, 'placeholder'=>'Juan Pérez']) ?>

    <?= $form->field($model, 'fnacimiento_paciente')->widget(DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        'language' => 'es', 
        //'disabled' => !empty($model->fnacimiento_post),
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'addon'=>false,
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight'=>true
        ],
        'options'=>[
            'disabled'=>$model->isNewRecord? false: 'disabled',
            'placeholder'=>'2020-12-31'
        ]
    ])?>

    <?= $form->field($model, 'sexo_paciente')->dropDownList(['Masculino'=>'Masculino', 'Femenino'=>'Femenino', 'Otro'=>'Otro'],['maxlength' => true, 'prompt'=>'Sexo...']) ?>

    <?= $form->field($model, 'alergias_paciente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_paciente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono2_paciente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_paciente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_region')->widget(Select2::classname(), [
                                    'data' => ArrayHelper::map(Region::find()->orderBy(['orden' => SORT_ASC])->all(), 'id_region', 'nom_region'),
                                    'options' => ['placeholder' => 'Región ...',
                                        'onchange'=>'$.post("index.php?r=site/comunas&id='.'"+$(this).val(), function(data){
                                                $("select#paciente-id_comuna").html(data);
                                            });'
                                    ],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]) ?>

    <?= $form->field($model, 'id_comuna')->widget(Select2::classname(), [
                                    'data' => ArrayHelper::map(Comuna::find()->orderBy(['nom_comuna' => SORT_ASC])->all(), 'id_comuna', 'nom_comuna'),
                                    'options' => ['placeholder' => 'Comuna ...'],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]) ?>

    <?= $form->field($model, 'direccion_paciente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comentario_paciente')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
