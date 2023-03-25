<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;


?>

<main>
    <section class="program__list">
        <?php
            if(isset($program)){
                foreach ($program as $prog){?>
        <article class="program__list-head item">
            <div class="program__name">
                <a href="<?= \yii\helpers\Url::to(['head/programcard', 'id' => $prog->id]) ?>"><?=$prog->programname?></a>
            </div>
            <div class="program__description">
                <?= $prog->deskript ?>
            </div>
        </article>
                <?php }
            }
            else{
                echo "У вас нет учебных программ";
            }


        ?>



        <div class="button program__add">
            Добавить программу
        </div>

    </section>
</main>