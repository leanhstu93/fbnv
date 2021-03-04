<?php

use frontend\models\Banner;
use frontend\models\SinglePage;
?>
<div class="footer hide-loading" id="stop-sticky">
    <div class="menucategory clearfix menufooter w100">
        <div class="wp1040">
            <ul>
                <li class="bt_home active"><a href="/" title="Trang chủ"><img src="images/homepage.png" /></a></li>
                <li class="li_left"><a href="/thoi-su.chn" title="THỜI SỰ">THỜI SỰ</a></li>
                <li><a href="" title="CHỨNG KHOÁN">CHỨNG KHOÁN</a></li>
                <li><a href="" title="BẤT ĐỘNG SẢN">BẤT ĐỘNG SẢN</a></li>
                <li><a href="" title="DOANH NGHIỆP">DOANH NGHIỆP</a></li>
                <li><a href="" title="NGÂN HÀNG">NGÂN HÀNG</a></li>
                <li><a href="" title="TÀI CHÍNH QUỐC TẾ">TÀI CHÍNH QUỐC TẾ</a></li>
                <li><a href="" title="VĨ MÔ">VĨ MÔ</a></li>
                <li><a href="" title="Sống">SỐNG</a></li>
                <li><a href="" title="Thị trường">THỊ TRƯỜNG</a></li>
            </ul>
        </div>
    </div>
    <div class="info clearfix">
        <div class="wp1040">
            <?php
            $oneFooter = SinglePage::getDataByCustomSetting('one_footer');
            if($oneFooter) {
            ?>
            <div class="left">
                <p><b><?php echo $oneFooter->name ?></b></p>
                <?php echo $oneFooter->content ?>
            </div>
            <?php } ?>
            <div class="center">
                <p><b>Liên hệ quảng cáo</b></p>
                <p>Hotline: 028.5411.0880</p>
                <p>Email: doanhnghiep@fbnc.vn</p>

                <a rel="nofollow" href="https://facebook.com" title="Xem chi tiết"
                   target="_blank" class="btn-messenger-lightbox"><span class="messenger-icon">
                    <svg width="12" height="12" viewBox="0 0 12 12">
                        <path d="M2.185,12.001 C2.522,11.817 2.845,11.639 3.154,11.468 C3.463,11.298 3.772,11.134 4.081,10.977 C4.147,10.940 4.226,10.914 4.320,10.900 C4.414,10.887 4.503,10.889 4.587,10.907 C5.261,11.046 5.926,11.085 6.582,11.025 C7.237,10.965 7.884,10.801 8.521,10.533 C9.410,10.155 10.136,9.626 10.698,8.948 C11.260,8.269 11.640,7.533 11.836,6.739 C12.033,5.945 12.033,5.132 11.836,4.301 C11.640,3.470 11.223,2.709 10.586,2.016 C10.155,1.545 9.694,1.157 9.202,0.853 C8.710,0.548 8.195,0.324 7.657,0.181 C7.118,0.038 6.561,-0.024 5.985,-0.006 C5.409,0.013 4.812,0.110 4.194,0.285 C3.669,0.433 3.184,0.629 2.740,0.873 C2.295,1.118 1.901,1.411 1.559,1.753 C1.217,2.095 0.927,2.485 0.688,2.923 C0.450,3.362 0.269,3.849 0.148,4.384 C0.026,4.920 -0.021,5.428 0.007,5.908 C0.035,6.388 0.129,6.847 0.288,7.286 C0.447,7.724 0.674,8.142 0.969,8.539 C1.264,8.936 1.613,9.315 2.016,9.675 C2.063,9.712 2.103,9.767 2.135,9.841 C2.168,9.915 2.185,9.979 2.185,10.035 C2.194,10.358 2.196,10.679 2.192,10.997 C2.187,11.316 2.185,11.651 2.185,12.001 L2.185,12.001 ZM5.304,4.107 C5.585,4.357 5.861,4.604 6.132,4.848 C6.404,5.093 6.685,5.345 6.975,5.603 C7.415,5.363 7.865,5.118 8.324,4.869 C8.783,4.620 9.246,4.370 9.715,4.121 C9.724,4.130 9.731,4.137 9.736,4.142 C9.741,4.147 9.748,4.154 9.757,4.163 C9.495,4.440 9.235,4.712 8.977,4.980 C8.720,5.248 8.462,5.518 8.205,5.790 C7.947,6.062 7.689,6.330 7.432,6.593 C7.174,6.856 6.919,7.122 6.666,7.390 C6.395,7.140 6.121,6.891 5.844,6.642 C5.568,6.392 5.285,6.143 4.994,5.894 C4.554,6.134 4.102,6.379 3.639,6.628 C3.175,6.877 2.709,7.131 2.241,7.390 C2.241,7.381 2.231,7.367 2.213,7.348 C2.475,7.071 2.735,6.796 2.992,6.524 C3.250,6.252 3.507,5.979 3.765,5.707 C4.023,5.435 4.280,5.165 4.538,4.897 C4.795,4.629 5.051,4.366 5.304,4.107 L5.304,4.107 L5.304,4.107 Z"
                              fill="#fff"></path>
                    </svg>
                </span>Chat với tư vấn viên</a>
            </div>
            <div class="right">
                <p><b>© Copyright 2007 - 2020 - Công ty Cổ phần FBNC.VN</b></p>
                <p>Giấy phép thiết lập trang thông tin điện tử tổng hợp trên mạng số 2216/GP-TTĐT do Sở Thông
                    tin và Truyền thông Hà Nội cấp ngày 10 tháng 4 năm 2020.</p>
                <p></p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="chinhsach">
        <div class="wp1040">
            <a href="javascript:void(0)" onclick="SharePolicy();return false;" rel="nofollow"
               title="Thỏa thuận chia sẻ nội dung">Thỏa thuận chia sẻ nội dung</a>
            <a href="https://cdnstoremedia.com/chinh-sach/chinh_sach_bao_mat.pdf" target="_blank" rel="nofollow"
               title="Chính sách bảo mật">Chính sách bảo mật</a>
            <p>Ghi rõ nguồn "Fbnc" khi phát hành lại thông tin từ kênh thông tin này.</p>
        </div>
    </div>

<!--    scrool top -->
    <div class="wrapper-scroll-top js_scroll-top">
        <img src="/images/icons/scrollTotop.png" />
    </div>
</div>





