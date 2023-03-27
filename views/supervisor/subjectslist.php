<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>

<nav>
    <div class="program__add">
        <a href="<?= \yii\helpers\Url::to(['/supervisor']) ?>">Назад</a>
    </div>
</nav>
<main>
    <section>
        <table>
            <tr>
                <th>Предмет</th>
                <th>Знания</th>
                <th>Умения</th>
                <th>Навыки</th>

            </tr>
            <?php
            if (isset($subid)){
                foreach ($subid as $sub ){?>
                    <tr>
                        <td><?= $sub->subjectname; ?></td>
                        <td><?= $sub->knowledge; ?></td>
                        <td> <?= $sub->skill;?></td>
                        <td><?= $sub->competency; ?></td>

                    </tr>
                    <tr></tr>

                <?php }
            }
            else{
                echo "Нет учебных предметов";
            }
            ?>
    </section>
</main>
