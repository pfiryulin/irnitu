<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>

<nav>
    <a href="/web">На главную</a>
    <a href="<?=\yii\helpers\Url::to(['tutor/recomendation'])?>">Рекомендации</a>
</nav>
<main>
    <section class="subject__list">
        <table>
            <tr>
                <th>Программа</th>
                <th>Предмет</th>
                <th>Знания</th>
                <th>Умения</th>
                <th>Навыки</th>

            </tr>
            <?php
            if(isset($program)){
                foreach ($program as $prog){?>
                 <tr>
                     <td><?= $prog->programs->programname ?></td>
                     <td><?= $prog->subjects->subjectname ?></td>
                     <td><?= $prog->subjects->knowledge ?></td>
                     <td><?= $prog->subjects->skill ?></td>
                     <td><?= $prog->subjects->competency ?></td>

                 </tr>
            <?php    
                }
            }


            ?>

        </table>

    </section>
</main>