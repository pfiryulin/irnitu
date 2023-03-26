<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>

<nav>
    <a href="<?= \yii\helpers\Url::to(['/head']) ?>">Вернуться к программам</a>
    <a href="<?= \yii\helpers\Url::to(['/irnitu']) ?>">На главную</a>
</nav>
<main>
    <section class="subject__list">
        <table>
            <tr>
                <th>Программа</th>
                <th>Предмет</th>
                <th>Замечание</th>


            </tr>
            <?php
            if (isset($remark)){
                foreach ($remark as $remark ){?>
                    <tr>
                        <td><?= $remark->programs->programname; ?></td>
                        <td><?= $remark->subjects->subjectname; ?></td>
                        <td><?= $remark->text; ?></td>
                    </tr>


                <?php }
            }
            else{
                echo "У вас нет рекомендаций";
            }
            ?>
        </table>

    </section>
</main>
