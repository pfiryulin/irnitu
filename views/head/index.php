<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>
<nav>
    <div class="program__add" id="programAdd">
        <a href="<?= \yii\helpers\Url::to(['head/programcreate'])?>">
            Создать программу
        </a>
    </div>
    <div class="program__add">
        <a href="<?= \yii\helpers\Url::to(['head/subjects'])?>">Предметы</a>
    </div>
    <div class="program__add">
        <a href="<?= \yii\helpers\Url::to(['head/creatsubject'])?>">Создать предмет</a>
    </div>
    <div class="program__add">
        <a href="<?= \yii\helpers\Url::to(['head/recommendations']) ?>"> Рекомендации  </a> <span><?= $recomendlen; ?> </span>
    </div>
    <div class="program__add">
        <a href="<?= \yii\helpers\Url::to(['head/remarks']) ?>"> Замечания </a> <span><?= $remarklen; ?></span>
    </div>
    <div>
        <a href="/web">На главную</a>
    </div>

</nav>

<div class="modalwin--message">
    <?=
        Yii::$app->session->getFlash('success');

    ?>
</div>


<main>
    <section class="program__list">
        <table>
            <?php
            if(isset($program)){
            foreach ($program as $prog){?>
            <tr>
                <td><a href="<?= \yii\helpers\Url::to(['head/programcard', 'id' => $prog->id]) ?>"><?=$prog->programname?></a></td>
                <td><?= $prog->deskript ?></td>
                <td>

                        <a href="<?= \yii\helpers\Url::to(['head/updateprogram', 'id' => $prog->id]) ?>">
                            <div class="item__button button">
                                Редактировать
                            </div>
                        </a>

                </td>
            </tr>
            <?php }
            }
            else{
            echo "У вас нет учебных программ";
            }
            ?>
        </table>


    </section>



</main>
