<?php

use frontend\models\Banner;
use frontend\models\ConfigPage;
use frontend\models\TemplateCategory;
use frontend\models\Template;
?>
<section class="member__home w100 ">
    <div class="w1000">
        <div class="wrapper-title">
            THÀNH VIÊN THINK DESIGNER
        </div>
        <div class="title-section-large">
            Những người sáng tạo của Think Designer
        </div>
        <div class="title-section-desc text-center">
            <strong>Think – Designer</strong> là đơn vị thiết kế web chuyên nghiệp, uy tín chắc chắn sẽ không làm bạn thất vọng.
        </div>
        <div class="wrapper-content-slide js__slide-member">
            <?php
            $banners = Banner::getDataByCustomSetting('banner_brand');
            foreach ($banners->images as $banner) { ?>
                <div class="item">
                    <div class="avatar">
                        <img src="<?php echo $banner->image ?>">
                    </div>
                    <div class="name">
                        <?php echo $banner->name ?>
                    </div>
                    <div class="desc">
                        <?php echo $banner->desc ?>
                    </div>
                    <div class="content">
                        <?php echo $banner->content ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>