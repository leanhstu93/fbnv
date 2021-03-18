<?php

use frontend\models\Banner;
use yii\bootstrap\Modal;
?>

<section class="w100 section__header-top">
    <div class="w1000">
        <div class="wrapper-col">
            <div class="col-left">
                <div class="item">
                    <a href="tel:<?= $this->params['company']->tel ?>">
                    <i class="fal fa-phone-volume"></i>
                    <?= $this->params['company']->tel ?> </a> |
                    <a href="tel:<?= $this->params['company']->phone ?>"><?= $this->params['company']->phone ?></a>
                </div>
                <div class="item">
                    <i class="fal fa-map-marker-alt"></i>
                    <?= $this->params['company']->address ?>
                </div>
            </div>
            <div class="col-right">
                <ul>
                    <li>
                        <a href="<?php echo $this->params['company']->facebook ?>" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->params['company']->facebook ?>" target="_blank">
                            <i class="fal fa-envelope"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->params['company']->youtube ?>" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section_header w100">
    <div class="w1000">
        <div class="wrapper_col">
            <div class="column">
                <a href="<?php echo Yii::$app->homeUrl ?>" title="<?=  $this->params['company']->name ?>">
                    <img src="<?=  $this->params['company']->logo ?>"/>
                </a>
            </div>
            <div class="column">
                <?php echo $this->render("//element/menu"); ?>
            </div>
            <div class="column">
                <div class="wrapper-item-last">
                    <div class="item">
                        <i class="fab fa-opencart"></i>
                        <span>00000đ</span>
                        <span class="count">
                            2
                        </span>
                    </div>
                    <div class="item">
                        <a href="#">
                            <i class="fal fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


