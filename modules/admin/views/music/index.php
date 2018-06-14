<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Musics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="music-index">

    <h1>Музыка</h1>

    <p>
        <?= Html::a('Создать новую музыку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
            'name',
            'path',

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'headerOptions' => ['width' => '80'],
                'template' => '{view}, {delete}',
            ],
        ],
    ]); ?>
    <p>
        <span class="glyphicon glyphicon-eye-open"></span> - просмотр записи<br>
        <span class="glyphicon glyphicon-trash"></span> - удалени записи<br>
        Запись с <b>Name</b> <b>main</b> удалять <b style="color: red">НЕ НУЖНО</b> это песня, которая находится на главной странице
    </p>
</div>
