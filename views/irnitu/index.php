<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>

<nav>
    <a href="<?= \yii\helpers\Url::to(['head/']) ?>">Руководитель</a>
    <a href="<?= \yii\helpers\Url::to(['tutor/']) ?>">Преподаватель</a>
    <a href="<?= \yii\helpers\Url::to(['supervisor/']) ?>">Куратор</a>
</nav>

