<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TrefBank */

$this->title = $model->IdBank;
$this->params['breadcrumbs'][] = ['label' => 'Tref Banks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-bank-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdBank], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdBank], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdBank',
            'NamaBank',
            'KodeBank',
        ],
    ]) ?>

</div>
