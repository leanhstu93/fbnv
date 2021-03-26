<?php

use frontend\models\News;
use frontend\models\Service;
use frontend\models\SinglePage;
?>
<footer class="w100">
    <div class="w1000">
        <div class="wrapper-content w100">
            <div class="col">
                <div class="title">
                    Liên hệ
                </div>
                <div class="item">
                    <div class="title-sub">
                        Hotline hỗ trợ:
                    </div>
                    <div class="text">
                        <?= $this->params['company']->phone ?>, <?= $this->params['company']->tel ?>
                    </div>
                </div>

                <div class="item">
                    <div class="title-sub">
                        Email:
                    </div>
                    <div class="text">
                        <?= $this->params['company']->email ?>
                    </div>
                </div>

                <div class="item">
                    <div class="title-sub">
                        Thời gian làm việc:

                    </div>
                    <div class="text">
                        Thứ hai - thứ sáu: 8:00AM - 5:30PM
                    </div>
                </div>
                <div class="item">
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

            <div class="col">
                <div class="title">
                    Dịch vụ
                </div>
                <div id="accordion">
                    <?php
                    $data = Service::find()->where(['option' => Service::OPTION_HOT, 'active' => 1])
                        ->limit(6)
                        ->orderBy(Service::ORDER_BY)->all();

                    foreach ($data as $key => $service) {
                    ?>
                    <div class="card">
                        <div class="card-header" id="heading-<?php echo $key ?>">
                            <i class="fas fa-chevron-square-down mr-1"></i>
                                <span  class="btn-link"
                                        data-toggle="collapse"
                                        data-target="#collapse-<?php echo $key ?>"
                                        aria-expanded="true"
                                        aria-controls="collapse-<?php echo $key ?>">
                                    <?php echo $service->name ?>
                                </span>
                        </div>

                        <div id="collapse-<?php echo $key ?>"
                             class="collapse"
                             aria-labelledby="heading-<?php echo $key ?>"
                             data-parent="#accordion">
                            <div class="card-body">
                                <?php echo $service->getDescriptionCut(300) ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col">
                <div class="title">
                    Bài viết gần đây
                </div>

                <ul class="list-news">
                    <?php
                    $data = News::find()->where(['option' => Service::OPTION_HOT, 'active' => 1])
                        ->limit(4)
                        ->orderBy(Service::ORDER_BY)->all();

                    foreach ($data as $key => $news) {
                    ?>
                    <li>
                        <a href="<?php echo $news->getUrl() ?>">
                            <div class="wrapper-image">
                                <img src="<?php echo $news->getImage() ?>" class="w100">
                            </div>
                            <div class="wrapper-info">
                                <label>
                                    <?php echo $news->name ?>
                                </label>
                                <p class="date">
                                    <?php echo date('d/m/Y', $news->date_update) ?>
                                </p>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="wrapper-copy-right w100">
            <div class="col">
                <div class="logo-footer">
                    <a class="/">
                        <img src="<?php echo $this->params['company']->logo ?>" width="50px">
                    </a>
                    <label>
                        ©️ Copyright by Think Designer | Hotline: 0946-225-245 | TP. Hồng Ngự
                    </label>
                </div>
            </div>

            <div class="col-right">
                Copyright © 2021 www.think-designer.com
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top js_scroll-top">
    <i class="fal fa-arrow-up"></i>
</a>


