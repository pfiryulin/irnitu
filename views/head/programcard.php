<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;


?>
<main>
    <h2><?= $program->programname; ?></h2>
    <a href="/web/?r=head">Вернуться к программам</a>
    <section class="subject__list">
        <article class="susubject__list-head item">
            <div>Предмет</div>
            <div>Знания</div>
            <div>Умения</div>
            <div>Навыки</div>
            <div>Преподаватель</div>
        </article>
    </section>

    <?php
    foreach ($subid as $subid){
        echo $subid->subjectid."<br>";

    }
    var_dump($sub);
    echo "<br>";
    var_dump($subid);


    ?>
</main>

