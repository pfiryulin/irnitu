<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>

<nav>
    <a href="/web">На главную</a>
    <a href="<?= \yii\helpers\Url::to(['supervisor/remarks'])?>">Замечания</a>
    <a href="<?= \yii\helpers\Url::to(['supervisor/sendremark'])?>">Отправить замечание</a>
    <a href="<?= \yii\helpers\Url::to(['supervisor/subjectlist'])?>">Предметы</a>

</nav>
<main>
    <section class="subject__list">
    <table>
        <?php
            foreach ($programs as $program){?>
                <tr>
                    <td>
                        <a href="<?= \yii\helpers\Url::to(['supervisor/programcard', 'id'=>$program->id]);?>"><?= $program->programname?></a>
                    </td>
                    <td><?= $program->deskript ?></td>
                </tr>
          <?php  }
        ?>
    </table>

    </section>
</main>