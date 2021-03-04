<?php

use frontend\models\Banner;
use yii\bootstrap\Modal;
?>
<div class="header clearfix">
    <div class="header_logo">
        <div class="wp1040 relative">
            <div class="logo">
                <h1><a href="/" title="Kênh thông tin kinh tế - tài chính Việt Nam">
                        <img src="<?=  $this->params['company']->logo ?>"/>
                    </a></h1>
            </div>
        </div>
    </div>
    <div class="w1000">
        <div class="header-banner">
            <?php
            $banner = Banner::getDataByCustomSetting('banner_header');
            ?>
            <img class="image-responsive" src="<?php echo $banner->images->image ?>">
        </div>
    </div>
    <?php echo $this->render("//element/menu"); ?>
</div>


