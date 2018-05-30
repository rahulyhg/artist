<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="site-error" style="color: black;">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <p>Такая страница не найдена</p>
    </div>


</div>
