<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrefAgama */

$this->title = 'Update Tref Agama: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tref Agamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAgama, 'url' => ['view', 'id' => $model->idAgama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tref-agama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
