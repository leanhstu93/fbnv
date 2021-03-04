<?php

use frontend\models\Banner;
use frontend\models\News;
use frontend\models\NewsCategory;
?>
<div class="w1000">
    <div class="content page-home content-page" id="streamItem">
        <div class="page-left">
            <div class="noibat_home clearfix">
                <div class="news_left">
                    <div data-check-position="cf_home-position_focus"></div>
                    <div class="top_noibat clearfix" data-marked-zoneid="cf_home_focus">
                        <div class="top_noibat_row1 clearfix">
                            <h2>
                                FBNC - LONGFORM
                            </h2>
                            <?php
                            $longForm = News::find()->where(['option' => News::OPTION_LONG_FORM, 'active' => 1])->orderBy(News::ORDER_BY)->one();
                            $data = News::find()->where(['option' => News::OPTION_HOT, 'active' => 1])->orderBy(News::ORDER_BY)->all();

                            if($data != false)
                            {
                                ?>
                                <div class="bghltop clearfix">
                                    <div class="left">
                                        <a class="avatar" href="" title="title">
                                            <img src="<?php echo $longForm->image_standing ?>" alt="alt">
                                        </a>
                                    </div>
                                    <div class="right">
                                        <h2>
                                            <a href="<?php echo $longForm->getUrl() ?>"
                                               title="<?php echo $longForm->name ?>">
                                                <strong>
                                                    <?php echo $longForm->name ?>
                                                </strong>
                                            </a>
                                        </h2>

                                        <div class="right-desc text">
                                            <?php echo $longForm->getDescriptionCut(620) ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php
                        $item = array_shift($data);
                        if (isset($item)) {
                            ?>
                            <div class="block-top-one spacing-row-home w100">
                                <div class="heading-category-title">
                                    Bài top 1
                                </div>
                                <div class="wrapper-info w100">
                                    <div class="w50">
                                        <label>
                                            <?php echo $item->name ?>
                                        </label>
                                        <div class="wrapper-desc text">
                                            <?php echo $item->desc ?>
                                        </div>
                                    </div>
                                    <div class="w50">
                                        <img src="<?php echo $item->image ?>" class="w100">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="top_noibat_row2 mgt20">
                            <ul>
                                <?php
                                $item = array_shift($data);
                                if (isset($item)) {
                                    ?>
                                    <li class="big ">
                                        <a href="" title="<?php echo $item->name ?>">
                                            <img src="<?php echo $item->image ?>" class="w100" alt=""></a>
                                        <h2 class="w100">
                                            <a href="<?php echo $item->getUrl() ?>" title="<?php echo $item->name ?>"><?php echo $item->name ?></a>
                                        </h2>
                                    </li>
                                <?php } ?>
                                <?php
                                $item = array_shift($data);
                                if (isset($item)) {
                                    ?>
                                    <li class="big ">
                                        <a href="" title="<?php echo $item->name ?>">
                                            <img src="<?php echo $item->image ?>" class="w100" alt=""></a>
                                        <h2 class="w100">
                                            <a href="<?php echo $item->getUrl() ?>" title="<?php echo $item->name ?>"><?php echo $item->name ?></a>
                                        </h2>
                                    </li>
                                <?php } ?>
                                <?php
                                $item = array_shift($data);
                                if (isset($item)) {
                                    ?>
                                    <li class="big ">
                                        <a href="" title="<?php echo $item->name ?>">
                                            <img class="w100" src="<?php echo $item->image ?>" alt=""></a>
                                        <h2 class="w100">
                                            <a href="<?php echo $item->getUrl() ?>" title="<?php echo $item->name ?>"><?php echo $item->name ?></a>
                                        </h2>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="top_event spacing-row-home  clearfix">
                        <ul>
                            <?php
                            for ($i = 5; $i <= 8;$i++ ) {
                                $item = array_shift($data);
                                if (!isset($item)) {
                                    break;
                                }
                                ?>
                                <li>
                                    <span>»</span>
                                    <a href="<?php echo $item->getUrl() ?>" title="<?php echo $item->name ?>"><?php echo $item->name ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php
                    $dataMiddle = News::getDataByCustomSetting('home_news_middle');
                    ?>
                    <div class="top5_news">
                        <div class="magazine-and-investors clearfix">
                            <div class="home-box-magazine">
                                <?php

                                $item = !empty($dataMiddle->data) ? array_shift($dataMiddle->data) : null;
                                if (isset($item)) {
                                    ?>
                                    <div class="home-box-magazine-news clearfix">
                                        <a class="avatar" href="<?php echo $item->getUrl() ?>" title="">
                                            <img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>">
                                        </a>
                                        <div class="home-box-magazine-news-info">
                                            <h3>
                                                <a title="<?php echo $item->name ?>" href="<?php echo $item->getUrl() ?>">
                                                    <?php echo $item->name ?>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                <?php }
                                $item = !empty($dataMiddle->data) ? array_shift($dataMiddle->data) : null;
                                if (isset($item)) {
                                    ?>
                                    <div class="home-box-magazine-news clearfix">
                                        <a class="avatar" href="<?php echo $item->getUrl() ?>" title="">
                                            <img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>">
                                        </a>
                                        <div class="home-box-magazine-news-info">
                                            <h3>
                                                <a title="<?php echo $item->name ?>" href="<?php echo $item->getUrl() ?>">
                                                    <?php echo $item->name ?>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="box-nha-dau-tu">
                                <h2 class="title_box"><?php echo $dataMiddle->category->name ?></h2>
                                <div class="box-nha-dau-tu-content">
                                    <ul>
                                        <?php
                                        for($i = 0; $i <= 7; $i++ ){
                                            if (empty($dataMiddle->data[$i])) {
                                                break;
                                            }
                                            $item = $dataMiddle->data[$i];
                                            ?>
                                            <li class="clearfix">
                                                <a title="<?php echo $item->name ?>" href="<?php echo $item->getUrl() ?>" class="bndt-item-title">
                                                    <?php echo $item->name ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="listchungkhoannew">
                            <?php
                            for ($i = 0; $i <= 8;$i++ ) {
                                if (empty($data)) {
                                    break;
                                }
                                $item = array_shift($data);
                                ?>
                                <li class="tlitem clearfix top">
                                    <a class="avatar" href="">
                                        <img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>"></a>
                                    <div class="knswli-right">
                                        <h3><a class="title-news" href="<?php echo $item->getUrl() ?>" title="<?php echo $item->name ?>"><?php echo $item->name ?></a></h3>
                                        <p class="time_cate">
                                            <a  href="<?php echo $item->category->getUrl() ?>" title="<?php echo $item->category->name ?>"><?php echo $item->category->name ?></a>
                                            <span class="gachngoai">-<span>
                                        <span class="time" title="><?php echo date( 'Y-M-d H:i:s',$item->date_create) ?>"><?php echo $item->getCreateTimeToString() ?></span></span>
                                    </span>
                                        </p>
                                        <p class="sapo">
                                            <?php echo $item->desc ?>
                                        </p>
                                    </div>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>

                    <div class="top5_news mgt0">
                        <div class="kl-group-content clearfix">
                            <?php
                            $dataAtt = News::find()->where(['option' => News::OPTION_ATTENTION, 'active' => 1])->orderBy(News::ORDER_BY)->all();
                            if ($dataAtt) {
                                ?>
                                <div class="newdangchuy">
                                    <p class="title_box">ĐÁNG CHÚ Ý</p>
                                    <div class="kdsdsk-wrapper">
                                        <ul class="list-kdsdsk">
                                            <?php
                                            for ($i = 0; $i < 6; $i++){

                                                if (empty($dataAtt)) {
                                                    break;
                                                }

                                                $item = array_shift($dataAtt);
                                                ?>
                                                <li class="kdsdsk">
                                                    <a class="clearfix" href="" title="<?php echo $item->name ?>">
                                                        <img class="w100" src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>">
                                                    </a>
                                                    <h4>
                                                        <a href="<?php echo $item->getUrl() ?>">
                                                            <?php echo $item->name ?>
                                                        </a>
                                                    </h4>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="higlight_box clearfix row1 box-goc-nhin-chuyen-gia">
                                    <div class="chuyengia_box clearfix">
                                        <ul>
                                            <?php
                                            for ($i = 0; $i < 12; $i++){
                                                if (empty($dataAtt)) {
                                                    break;
                                                }
                                                $item = array_shift($dataAtt);
                                                ?>
                                                <li>
                                                    <a href="<?php echo $item->getUrl() ?>">
                                                        - <?php echo $item->name ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <ul class="listchungkhoannew">
                            <?php
                            for ($i = 0; $i < 12; $i++){
                                if (empty($data)) {
                                    break;
                                }
                                $item = array_shift($data);
                                ?>
                                <li class="tlitem clearfix top">
                                    <a href="<?php echo $item->getUrl() ?>">
                                        <img class="w100" src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>"></a>
                                    <div class="knswli-right">
                                        <h3>
                                            <a href="<?php echo $item->getUrl()?>" class="title-news">
                                                <?php echo $item->name ?>
                                            </a>
                                        </h3>
                                        <p class="time_cate ">
                                            <a href="<?php echo $item->category->getUrl() ?>" title="<?php echo $item->category->name ?>"><?php echo $item->category->name ?></a>
                                            <span class="gachngoai">-<span>
                                    <span class="time" title="2020-06-30T18:02:37">
                                        <?php echo $item->getCreateTimeToString() ?>
                                    </span></span></span>
                                        </p>
                                        <p class="sapo">
                                            <?php echo $item->desc ?>
                                        </p>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="list3box bdtop">
                <div class="mgt25 bdtopadm">
                    <div id="boxTinDoanhNghiep">
                        <div class="title_boxTinDN">
                            <span class="iconBoxDN sprite_adm"></span>
                            <a href="" class="textTitleTinDN" target="_blank">TIN DOANH NGHIỆP</a>
                        </div>
                        <ul class="tinDNul">
                            <?php
                            $dataMiddle2 = News::getDataByCustomSetting('home_news_product_highlight');
                            for ($i = 0; $i < 7; $i++) {
                                if(empty($dataMiddle2->data)) {
                                    break;
                                }
                                $item = array_shift($dataMiddle2->data);
                                ?>
                                <li class="no_border prM6 bdbot">
                                    <div class="wrapper-image">
                                        <a class="nameTDN" href="<?php echo $item->getUrl() ?>">
                                            <img class="w100" src="<?php echo $item->image ?>">
                                        </a>
                                    </div>
                                    <div class="wrapper-info">
                                        <a class="nameTDN" href="<?php echo $item->getUrl() ?>">
                                            <?php echo $item->name ?></a>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div id="boxSanPhamNoiBat">
                        <a href="" class="titleSPNB title_box"><?php echo $dataMiddle2->category->name ?></a>
                        <ul class="boxSPNoiBatul">
                            <?php
                            if (!empty($dataMiddle2->data)) {
                                $item = array_shift($dataMiddle2->data);
                                ?>
                                <li class="top">
                                    <a href="<?php echo $item->getUrl() ?>">
                                        <img alt="<?php echo $item->name ?>" src="<?php echo $item->image ?>" class="spImg">
                                    </a>

                                    <a class="w100 textNoiBat first title-news" href="<?php echo $item->getUrl() ?>">
                                        <?php echo $item->name ?>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php
                            if (!empty($dataMiddle2->data)) {
                                $item = array_shift($dataMiddle2->data);
                                ?>
                                <li class="sp">
                                    <a href="<?php echo $item->getUrl() ?>">
                                        <img alt="<?php echo $item->name ?>" src="<?php echo $item->image ?>" class="spImg">
                                    </a>
                                    <a class="textNoiBat first title-news" href="<?php echo $item->getUrl() ?>">
                                        <?php echo $item->name ?>
                                    </a>
                                    <div class="wrapper-desc w100">
                                        <?php echo $item->getDescriptionCut(100) ?>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php
                            if (!empty($dataMiddle2->data)) {
                                $item = array_shift($dataMiddle2->data);
                                ?>
                                <li class="sp">
                                    <a href="">
                                        <img alt="<?php echo $item->name ?>" src="<?php echo $item->image ?>" class="spImg">
                                    </a>
                                    <a class="textNoiBat first title-news" href="<?php echo $item->getUrl() ?>">
                                        <?php echo $item->name ?>
                                    </a>
                                    <div class="wrapper-desc w100">
                                        <?php echo $item->getDescriptionCut(100) ?>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <span class="clearfix"></span>
                </div>
                <div class="border_bottom mgt0"></div>
            </div>
            <div class="top5_news2 top5_news4">
                <div class="top5_news">
                    <ul class="listchungkhoannew">
                        <?php
                        for ($i = 0; $i < 4; $i++){
                            if (empty($data)) {
                                break;
                            }
                            $item = array_shift($data);
                            ?>
                            <li class="tlitem clearfix">
                                <a class="avatar" href="<?php echo $item->getUrl() ?>">
                                    <img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>"></a>
                                <div class="knswli-right">
                                    <h3>
                                        <a href="<?php echo $item->getUrl() ?>"><?php echo $item->name ?></a>
                                    </h3>
                                    <p class="sapo"><?php echo $item->getDescriptionCut(150) ?></p>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php
            $dataSlide = News::getDataByCustomSetting('home_news_slide_1');
            echo $this->render("//element/home/slide-news", ['data' => $dataSlide, 'class_name' => '']);
            $dataSlide = News::getDataByCustomSetting('home_news_slide_2');
            echo $this->render("//element/home/slide-news", ['data' => $dataSlide, 'class_name' => 'bg-green-slide-2']);
            ?>
            <span class="border_bottom"></span>
            <div class="cateboxhome w100">
                <div class="leftcatHome fl">
                    <?php
                    $category = NewsCategory::find()->where(['option' => NewsCategory::OPTION_SPECIAL, 'active' => 1])->limit(6 )->orderBy(News::ORDER_BY)->all();
                    if ($category) {
                        $itemCate = array_shift($category);
                        $news = News::find()->where(['category_id' => $itemCate->id, 'active' => 1])->limit(5 )->orderBy(News::ORDER_BY)->all();
                        ?>
                        <div class="box2cate">
                            <?php   echo $this->render("//element/home/box-special-left", ['category' => $itemCate, 'news' => $news]); ?>

                            <?php
                            $itemCate = array_shift($category);
                            if (!empty($itemCate)) {
                                $news = News::find()->where(['category_id' => $itemCate->id, 'active' => 1])->limit(5)->orderBy(News::ORDER_BY)->all();
                                echo $this->render("//element/home/box-special-right", ['category' => $itemCate, 'news' => $news]);
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php  } ?>

                </div>
            </div>
            <div class="cateboxhome w100">
                <div class="leftcatHome fl">
                    <?php
                    if ($category) {
                        $itemCate = array_shift($category);
                        $news = News::find()->where(['category_id' => $itemCate->id, 'active' => 1])->limit(5 )->orderBy(News::ORDER_BY)->all();
                        ?>
                        <div class="box2cate">
                            <?php   echo $this->render("//element/home/box-special-left", ['category' => $itemCate, 'news' => $news]); ?>

                            <?php
                            $itemCate = array_shift($category);
                            if (!empty($itemCate)) {
                                $news = News::find()->where(['category_id' => $itemCate->id, 'active' => 1])->limit(5)->orderBy(News::ORDER_BY)->all();
                                echo $this->render("//element/home/box-special-right", ['category' => $itemCate, 'news' => $news]);
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php  } ?>
                    <div class="box2cate" id="CategoryHomeHl6">
                      
                            <?php
                            $longForm = News::find()->where(['option' => News::OPTION_LONG_FORM, 'active' => 1])->orderBy(News::ORDER_BY)->one();
                            ?>
                            <div class="right boxthongcao">
                                <h2 class="title_box">
                                    <a href="<?php echo  $longForm->getUrl()  ?>">FBNC - LONGFORM
                                    </a>
                                </h2>
                                <span class="borderbox"></span>
                                <div class="wrapper-image">
                                    <img src="<?php echo $longForm->image_standing ?>" class="w100">
                                </div>
                                <h3 class="tittle-news">
                                    <a href="<?php echo  $longForm->getUrl()  ?>">
                                        <?php echo $longForm->name ?>
                                    </a>
                                </h3>
                            </div>
                            <?php
                            $banner = Banner::getDataByCustomSetting('one_banner_home_bottom');
                            if (!empty($banner->images)) {
                                ?>
                                <div class="CauChuyenThuongHieu left">
                                    <img src="<?php echo $banner->images->image ?>" class="w100">
                                </div>
                            <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php  echo $this->render("//element/sidebar"); ?>

    </div>
</div>


