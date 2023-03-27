<?php

/** @var yii\web\View $this */

use app\models\Subjects;

$this->title = Yii::$app->name;


?>
<nav>
    <a href="<?= \yii\helpers\Url::to(['/head']) ?>">Вернуться к программам</a>
    <a href="<?= \yii\helpers\Url::to(['/head/updateprogram', 'id' => $program->id]) ?>">Редактировать</a>
</nav>
<main>

    <h2><?= $program->programname; ?></h2>
    <div>
        <?= $program->deskript; ?>
    </div>
    <section class="subject__list">
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
                        <td><?= $sub->subjects->subjectname; ?></td>
                        <td><?= $sub->subjects->knowledge; ?></td>
                        <td> <?= $sub->subjects->skill;?></td>
                        <td><?= $sub->subjects->competency; ?></td>
                        <td>
                            <div class="item__button button">
                                Редактировать
                            </div>
                        </td>
                    </tr>
                    <tr></tr>

                <?php }
            }
            else{
                echo "Предметы не назначены";
            }
            ?>
        </table>
    </section>

<div class="modalwin">

</div>


</main>

