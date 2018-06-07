<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="images-index">

    <h1>Изображение</h1>

    <p>
        <?= Html::a('Создать новое изображение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'path',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p>
        <span class="glyphicon glyphicon-eye-open"></span> - просмотр записи<br>
        <span class="glyphicon glyphicon-trash"></span> - удалени записи<br>
        Запись с <b>Name</b> <b>header, event, footer</b> удалять <b style="color: red">НЕ НУЖНО</b> это песня, которая находится на главной странице
    </p>
</div>
