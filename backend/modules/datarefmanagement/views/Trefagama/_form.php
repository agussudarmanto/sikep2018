<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrefAgama */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tref-agama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaAgama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
