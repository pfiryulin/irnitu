<?php

/** @var yii\web\View $this */

use app\models\Indikators;
use app\models\Subjects;
use app\models\Programs;
use app\models\Recommendations;

$this->title = Yii::$app->name;


?>

<nav>
    <a href="<?= \yii\helpers\Url::to(['/head']) ?>">Вернуться к программам</a>
</nav>

<main>
    <section class="subject__list">
        <table>
            <tr>
                <th>Программа</th>
                <th>Предмет</th>
                <th>Индикатор</th>
                <th>Рекомендация</th>
                <th>Статус</th>

            </tr>
            <?php
            if (isset($recomendation)){
                foreach ($recomendation as $recomendation ){?>
                    <tr>
                        <td><?= $recomendation->programs->programname; ?></td>
                        <td><?= $recomendation->subjects->subjectname; ?></td>
                        <td> <?= $recomendation->indikators->indikatorname;?></td>
                        <td><?= $recomendation->text; ?></td>
                        <td><?= $recomendation->status->statusname; ?></td>
                    </tr>
                    <tr></tr>

                <?php }
            }
            else{
                echo "У вас нет рекомендаций";
            }
            ?>
        </table>

    </section>
</main>
