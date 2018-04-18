<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrefBank */

$this->title = 'Update Tref Bank: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tref Banks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdBank, 'url' => ['view', 'id' => $model->IdBank]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tref-bank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
