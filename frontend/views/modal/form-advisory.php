<?php

use yii\bootstrap4\Modal;

Modal::begin([
    'id'=>'js__modal-form-advisory',

    'size'=>'',
    'class' => 'css__form-adv'
]);
?>
    <div id='modalContent'>
        <?php  echo $this->render("//element/form-contact"); ?>
    </div>

<?php Modal::end() ?>