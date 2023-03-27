<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>

<nav>
    <div class="program__add">
        <a href="<?= \yii\helpers\Url::to(['/head']) ?>">Программы</a>
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
                        <td>
                            <div class="item__button button">
                                <a href="<?= \yii\helpers\Url::to(['head/subjectupdate', 'id'=>$sub->id]) ?>">Редактировать</a>
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
    </section>
</main>
