<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TrefBank */

$this->title = 'Create Tref Bank';
$this->params['breadcrumbs'][] = ['label' => 'Tref Banks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-bank-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
