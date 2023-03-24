<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="style/style.css">-->
    <title>IRNITU</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php $this->endBody() ?>
<!--<script src="scripts/script.js"></script>-->
</body>
</html>
<?php $this->endPage() ?>
<!--
    1. Паспорт программы
        1.1 Название программы
        1.2 Перечень дисциплин
            1.2.1 Название дисциплины
            1.2.2 Индикаторы с описанием
            1.2.3 Список преподователей дисциплины
        1.3 Список преподователей программы

    2. Роли
        2.1 Руководитель.
            2.1.1 Полный доступ к редактированию и созданию паспорта программы.
            2.1.2 Может вносить изменения в инликаторы программы
            2.1.3 Может назначать и убирать преподавателей дисциплин и программы.
        2.2 Куратор (методист)
            2.2.1 Имеет доступ к паспортам всех программ
            2.2.2 Может вносить замечания по программам, которые будут отправляться руководителю и отображаться в интерфейсе
            2.2.3 Может создавать и назначать руководителей программы.
        2.3 Преподаватель
            2.3.1 Видит программу и дичциплины
            2.3.2 Может вносить предложения по изменениям индикаторов.
   3. Главаня страница для куратора
        3.1 Перечень всех программ, с возможнось открытия её паспорта.
-->
