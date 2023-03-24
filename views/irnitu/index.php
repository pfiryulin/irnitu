<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name;


?>

<div class="login__form">
   Выбирете роль: <select name="" id="">
        
        <?php 
        if(isset($role)){
            foreach ($role as $role){
              ?>
        <option value="<?= $role->id ?>"> <?= $role->name?> </option>
         <?php   }

        }
        ?>
        
    </select>
    .
</div>
