

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>C&#249;ng Mua - Mua hot deal theo nh&#243;m, mua deal chung gi&#225; rẻ &#187; CungMua.com</title>
    <?php
    echo $this->fetch('meta');
    echo $this->Html->css(array('bootstrap.min','base','plugins','new_custom'));
    echo $this->Html->script(array('jquery-2.1.1.min'));
    echo $this->fetch('css');
    ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

    <script>
        var slide = "<?php echo $this->Html->url(
            array(
                'controller' => 'pages',
                'action' => 'slides',
            )
        );?>";
    </script>

</head>

<body>
<?php echo $this->element('facebook');?>

<div id="mainBody" class="ovelay_menu"></div>
<div class="index">
    <header id="mainHeader" class="index_header">
        <div class="header_menu">
            <div class="container">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                    <ul class="menu_top">
                        <!--Surport -->
                        <li class="end">
                            <a><span class="icon-phone ic_cm">D</span>Hỗ trợ: 19006637 (8h-21h)<span class="ic_cm icon-arrow-d">k</span></a>
                            <div class="hover_menu">
                                <ul class="list_hotline">
                                    <li><a href='/phuong-thuc-van-chuyen'>Phương thức vận chuyển </a></li>
                                    <li><a href='/chinh-sach-doi-tra'>Chính sách đổi trả</a></li>
                                    <li><a href='/su-dung-voucher'>Sử dụng voucher</a></li>
                                    <li class="email"><span class="ic_cm icon-email">2</span><a href="mailto:hotro@cungmua.com">hotro@cungmua.com</a></li>
                                    <li class="phone"><span class="icon-phone ic_cm">D</span>
                                        <p class="bold">19006637</p>
                                        <p>(8h - 21h kể cả Thứ 7 - Chủ Nhật)</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- end Surport -->
                        <!--cart -->
                        <li id="cartTopHeader">
                            <div id="cartTop">
                                <a href="/checkout/gio-hang">Giỏ hàng (<span>0</span>)<span class="ic_cm icon-arrow-d">k</span></a>
                                <div class="hover_menu">
                                    <p class="hover_TT">Giỏ hàng của bạn</p>
                                    <p class="no_item">
                                        Hiện chưa có sản phẩm nào
                                        <br />
                                        trong giỏ hàng của bạn
                                    </p>
                                </div>

                            </div>
                        </li>
                        <!-- end cart -->
                    </ul>
                </div>
            </div>
        </div><!--EndDonut-->
        <div class="header_main">
            <div class="container">
                <nav class="chose_cate">
                    <a><span class="ic_cm icon-menu">A</span><span class="text_cate">CHỌN DANH MỤC</span></a>
                    <div class="menu_cate menu_ver_inside ">
                        <ul class="menu_ver">
                            <li>
                                <a href="">
                                    <span class="ic_cm icon-new">C</span>Hàng mới về</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="ic_cm icon-promote">B</span>Hàng khuyến mãi</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="ic_cm icon-userlike">4</span>Hàng được ưa chuộm</a>
                            </li>
                            <li>
                                <a href=""><span class="ic_cm">z</span>Thời trang nữ
                                    <span class="ic_cm  icon_arr">K</span>
                                </a>
                                <div class="menu_ver_hover">
                                    <ul class="menu_ver_item">
                                        <li class="bold">
                                            <a href="">Quần nữ</a>
                                        </li>
                                        <li>
                                            <a href="">Quần t&#226;y c&#244;ng sở</a>
                                        </li>
                                    </ul>
                                    <ul class="menu_ver_item">
                                        <li class="bold">
                                            <a href="">Quần nữ</a>
                                        </li>
                                        <li>
                                            <a href="">Quần t&#226;y c&#244;ng sở</a>
                                        </li>
                                    </ul>
                                    <ul class="menu_ver_item">
                                        <li class="bold">
                                            <a href="">Quần nữ</a>
                                        </li>
                                        <li>
                                            <a href="">Quần t&#226;y c&#244;ng sở</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href=""><span class="ic_cm">y</span>Thời trang nam
                                    <span class="ic_cm  icon_arr">K</span>
                                </a>
                                <div class="menu_ver_hover">
                                    <ul class="menu_ver_item">
                                        <li class="bold">
                                            <a href="">&#193;o nam</a>
                                        </li>
                                        <li>
                                            <a href="">&#193;o sơmi nam</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="end">
                                <a href=""><span class="ic_cm">m</span>Đồ chơi - Bé yêu
                                    <span class="ic_cm  icon_arr">K</span>
                                </a>
                                <div class="menu_ver_hover">
                                    <ul class="menu_ver_item">
                                        <li class="bold">
                                            <a href="">Đồ chơi</a>
                                        </li>
                                        <li>
                                            <a href="">Đồ chơi cho b&#233; lớn</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="logo_cungmua"><a href="/" class="logo_cungmua"><img alt="cungmua" src="/img/logo.png" height="34" /></a> </div>
                <div class="menu_right_home">
                    <div id="divSearch" class="search">
                        <form id="frmSearch" method="GET">
                            <input type="text" id="search" name="q" autocomplete="off" placeholder="Tìm kiếm..." maxlength="200" />
                            <button class="btn_search" type="submit"><span class="ic_cm">E</span></button>
                        </form>
                    </div>
                    <ul class="menu_top scroll_menu">
                        <li class="end">
                            <a>19006637<span class="ic_cm icon-arrow-d">k</span></a>
                            <div class="hover_menu">
                                <ul class="list_hotline">
                                    <li><a href='/phuong-thuc-van-chuyen'>Phương thức vận chuyển </a></li>
                                    <li><a href='/chinh-sach-doi-tra'>Chính sách đổi trả</a></li>
                                    <li><a href='/su-dung-voucher'>Sử dụng voucher</a></li>
                                    <li class="email"><span class="ic_cm icon-email">2</span><a href="mailto:hotro@cungmua.com">hotro@cungmua.com</a></li>
                                    <li class="phone"><span class="icon-phone ic_cm">D</span>
                                        <p class="bold">19006637</p>
                                        <p>(8h - 21h kể cả Thứ 7 - Chủ Nhật)</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li id="cartTopScroll">

                            <a href="/checkout/gio-hang">Giỏ hàng (<span>0</span>)<span class="ic_cm icon-arrow-d">k</span></a>
                            <div class="hover_menu">
                                <p class="hover_TT">Giỏ hàng của bạn</p>
                                <p class="no_item">
                                    Hiện chưa có sản phẩm nào
                                    <br />
                                    trong giỏ hàng của bạn
                                </p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <div class="index_middle">
        <div class="container dad">
            <div class="menu_cate">
                <ul class="menu_ver">
                    <li>
                        <a href="">
                            <span class="ic_cm icon-new">C</span>Hàng mới về</a>
                    </li>
                    <li>
                        <a href="">
                            <span class="ic_cm icon-promote">B</span>Hàng khuyến mãi</a>
                    </li>
                    <li>
                        <a href="">
                            <span class="ic_cm icon-userlike">4</span>Hàng được ưa chuộm</a>
                    </li>
                    <li>
                        <a href=""><span class="ic_cm">z</span>Thời trang nữ
                            <span class="ic_cm  icon_arr">K</span>
                        </a>
                        <div class="menu_ver_hover">
                            <ul class="menu_ver_item">
                                <li class="bold">
                                    <a href="">Quần nữ</a>
                                </li>
                                <li>
                                    <a href="">Quần t&#226;y c&#244;ng sở</a>
                                </li>
                            </ul>
                            <ul class="menu_ver_item">
                                <li class="bold">
                                    <a href="">Quần nữ</a>
                                </li>
                                <li>
                                    <a href="">Quần t&#226;y c&#244;ng sở</a>
                                </li>
                            </ul>
                            <ul class="menu_ver_item">
                                <li class="bold">
                                    <a href="">Quần nữ</a>
                                </li>
                                <li>
                                    <a href="">Quần t&#226;y c&#244;ng sở</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href=""><span class="ic_cm">y</span>Thời trang nam
                            <span class="ic_cm  icon_arr">K</span>
                        </a>
                        <div class="menu_ver_hover">
                            <ul class="menu_ver_item">
                                <li class="bold">
                                    <a href="">&#193;o nam</a>
                                </li>
                                <li>
                                    <a href="">&#193;o sơmi nam</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="end">
                        <a href=""><span class="ic_cm">m</span>Đồ chơi - Bé yêu
                            <span class="ic_cm  icon_arr">K</span>
                        </a>
                        <div class="menu_ver_hover">
                            <ul class="menu_ver_item">
                                <li class="bold">
                                    <a href="">Đồ chơi</a>
                                </li>
                                <li>
                                    <a href="">Đồ chơi cho b&#233; lớn</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="banner_left">

            </div>
            <?php echo $this->element('slide_1'); ?>



        </div>
        <div id="dataVoucher" data-floor="T0">
            <div id="floorjumping" class="bg_menu_fix_H">
                <div class="fix_H">
                    <ul class="menu_fix_H">
                        <li data-floor-index="T1"><a href="javascript:void(0);" class="ic_cm">R</a><div class="menu_H_info">Có thể bạn thích</div></li>
                        <li data-floor-index="T1"><a href="javascript:void(0);" class="ic_cm">C</a><div class="menu_H_info">Hàng mới về</div></li>
                        <li data-floor-index="T2"><a href="javascript:void(0);" class="ic_cm ">B</a><div class="menu_H_info">Hàng khuyến mãi</div></li>
                        <li data-floor-index="T2"><a href="javascript:void(0);" class="ic_cm ">4</a><div class="menu_H_info">Hàng được ưa chuộm</div></li>
                        <li data-floor-index="T2"><a href="javascript:void(0);" class="ic_cm ">z</a><div class="menu_H_info">Thời trang nữ</div></li>
                        <li data-floor-index="T3"><a href="javascript:void(0);" class="ic_cm">y</a><div class="menu_H_info">Thời trang nam</div></li>
                        <li data-floor-index="T6"><a href="javascript:void(0);" class="ic_cm">m</a><div class="menu_H_info">Đồ chơi - Bé yêu</div></li>
                    </ul>
                </div>
            </div>

            <script type="text/javascript">
                $(function() {
                    $("#floorjumping li").click(function(e) {
                        e.preventDefault();
                        var flrIdx = $(this).attr("data-floor-index");
                        $("html, body").animate({ scrollTop: $("[data-floor=" + flrIdx + "]").offset().top - 25 });
                    });
                });
            </script>
        </div>
    </div>
    <div class="index_flash" data-floor="T1">
        <div class="container1">
            <div class="title_home">
                <p class="bg_ic"><span class="ic_cm icon-flash">w</span></p>
                <div class="title_home_text">
                    <a href="javascript:;">Có thể bạn thích</a>
                </div>
                <ul class="title_menu" id="order-flashsale">
                    <li><a href="javascript:void(0);" class="actived"><span class="ic_cm">.</span> ĐANG SALE</a></li>
                    <li><a href="javascript:void(0);"><span class="ic_cm">4</span> ĐANG HOT</a></li>
                    <li><a href="javascript:void(0);"><span class="ic_cm">C</span> MỚI NHẤT</a></li>
                </ul>
            </div>
<!--           product here <div></div>-->
        </div>
    </div>
    <div class="index_middle">

        <div class="container1" data-floor="T2">
            <div class="title_home">
                <p class="bg_ic ic_text"><a href="/thoi-trang-nu" class="title_home_text">THỜI TRANG NỮ</a></p>
                <ul class="title_link">
                    <li><a href="/thoi-trang-nu" class="ic_cm link_next">i</a></li>
                    <li><a href="/thoi-trang-nu/phu-kien-thoi-trang-nu" class="end">Phụ kiện</a></li>
                    <li><a href="/thoi-trang-nu/do-mac-nha">Mặc nhà</a></li>
                    <li><a href="/thoi-trang-nam/do-lot-tat-vo">Đồ lót</a></li>
                    <li><a href="/thoi-trang-nu/quan-nu">Quần</a></li>
                    <li><a href="/thoi-trang-nu/ao-nu">Áo nữ</a></li>
                </ul>

            </div>
            <div class="hightlight_deal">
                <div class="col-md-6 col-sm-8">
                    <a target="_self" href="http://www.cungmua.com/thoi-trang-nu/ao-nu/ao-kieu/bo-suu-tap-set-do-thoi-trang-danh-cho-phai-dep_pp78288.html?cmpid=0&amp;cmps=home_page&amp;cmpm=list_t2_banner&amp;cmpc=1">
                        <img alt="group deal" src="http://resources.cungmua.com/CMBanner/635790452184358844.jpg" width="490" height="298" />
                    </a>
                </div>


                <div class="col-md-3 col-sm-4">
                    <a target="_blank" class="hightlight_sm  tracking" href="http://www.cungmua.com/thoi-trang-nu/ao-nu/ao-kieu/ao-kieu-cong-so-dong-gia-99000-thuong-hieu-nt-fashion_pp77657.html?cmpid=0&amp;cmps=home_page&amp;cmpm=list_t2_banner&amp;cmpc=2">
                        <img alt="group deal" class="" src="http://resources.cungmua.com/CMBanner/635790453012720299.jpg" width="235" height="139" /><span class="sm_view">XEM NGAY</span>
                    </a>
                    <a target="_blank" class="hightlight_sm end tracking" href="http://www.cungmua.com/thoi-trang-nu/do-mac-nha/do-mac-nha/bo-suu-tap-thoi-trang-mac-nha-melike_pp57407.html?cmpid=0&amp;cmps=home_page&amp;cmpm=list_t2_banner&amp;cmpc=4">
                        <img alt="flash sale" class="" src="http://resources.cungmua.com/CMBanner/635790453396792974.jpg" width="235" height="139" /><span class="sm_view">XEM NGAY</span>
                    </a>
                </div>
                <div class="col-md-3 hidden-sm col-xs-3">
                    <a target="_blank" class="hightlight_sm  tracking" href="http://www.cungmua.com/thoi-trang-nu/phu-kien-thoi-trang-nu/tui-xach-nu/bst-set-tui-xach-thoi-trang-miracle-new-arrival_pp68113.html?cmpid=0&amp;cmps=home_page&amp;cmpm=list_t2_banner&amp;cmpc=3">
                        <img alt="group deal" class="" src="http://resources.cungmua.com/CMBanner/635790465907702948.jpg" width="235" height="139" /><span class="sm_view">XEM NGAY</span>
                    </a>
                    <a target="_blank" class="hightlight_sm end tracking" href="http://www.cungmua.com/thoi-trang-nu/do-lot-nu/ao-lot/bst-ao-nguc-sara-xuat-khau_pp76888.html?cmpid=0&amp;cmps=home_page&amp;cmpm=list_t2_banner&amp;cmpc=5">
                        <img alt="group deal" class="" src="http://resources.cungmua.com/CMBanner/635790466164167399.jpg" width="235" height="139" /><span class="sm_view">XEM NGAY</span>
                    </a>
                </div>

            </div>

            <ul class="listdeal_four">
                <li>


                    <!-- Product -->
                    <div class="img">
                        <a href="/thoi-trang-nu/dam-vay/dam-om/dam-body-tay-phong-cao-cap_p78766.html?cmpid=78766&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=1">
                            <img width="235" height="235" src="http://resources.cungmua.com/Product/cm_s78766.jpg" alt="Đầm body tay phồng cao cấp" class="deal" />
                        </a>
                        <p class="num_product_hover_T">Có 2 lựa chọn</p>
                        <div class="listdeal_hover_B">
                            <span class="text_alert">Giao sản phẩm to&#224;n quốc</span>
                            <a class="btn_view" href="/thoi-trang-nu/dam-vay/dam-om/dam-body-tay-phong-cao-cap_p78766.html?cmpid=78766&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=1">XEM NGAY</a>
                        </div>
                    </div>
                    <div class="listdeal_info">
                        <a class="list_name" href="/thoi-trang-nu/dam-vay/dam-om/dam-body-tay-phong-cao-cap_p78766.html?cmpid=78766&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=1">Đầm body tay phồng cao cấp</a>
                        <div class="listdeal_group">
                            <p class="listdeal_info_L num_down">56<span class="percent">%</span></p>
                            <p class="listdeal_info_Ce">
                                <span class="trueprice">500.000đ</span><br />
                                <span class="price">219.000đ</span>
                            </p>
                            <div class="listdeal_info_R">
                                <p class="num_people">
                                    <span class="ic_cm icon-num-people">f</span><span class="text_num_people">5</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-->

                </li>
                <li>


                    <!-- Product -->
                    <div class="img">
                        <a href="/thoi-trang-nu/quan-nu/quan-tay-cong-so/quan-tay-nu-thoi-trang-tuan-hung-lung-phoi-phi-xep-ly-hl019_p66189.html?cmpid=66189&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=2">
                            <img width="235" height="235" src="http://resources.cungmua.com/Product/cm_s66189.jpg" alt="Quần t&#226;y nữ thời trang Tuấn Hưng lưng phối phi xếp ly HL019" class="deal" />
                        </a>
                        <p class="num_product_hover_T">Có 5 lựa chọn</p>
                        <div class="listdeal_hover_B">
                            <span class="text_alert">Giao sản phẩm to&#224;n quốc</span>
                            <a class="btn_view" href="/thoi-trang-nu/quan-nu/quan-tay-cong-so/quan-tay-nu-thoi-trang-tuan-hung-lung-phoi-phi-xep-ly-hl019_p66189.html?cmpid=66189&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=2">XEM NGAY</a>
                        </div>
                    </div>
                    <div class="listdeal_info">
                        <a class="list_name" href="/thoi-trang-nu/quan-nu/quan-tay-cong-so/quan-tay-nu-thoi-trang-tuan-hung-lung-phoi-phi-xep-ly-hl019_p66189.html?cmpid=66189&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=2">Quần t&#226;y nữ thời trang Tuấn Hưng lưng phối phi xếp ly HL019</a>
                        <div class="listdeal_group">
                            <p class="listdeal_info_L num_down">33<span class="percent">%</span></p>
                            <p class="listdeal_info_Ce">
                                <span class="trueprice">200.000đ</span><br />
                                <span class="price">135.000đ</span>
                            </p>
                            <div class="listdeal_info_R">
                                <p class="num_people">
                                    <span class="ic_cm icon-num-people">f</span><span class="text_num_people">53</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-->

                </li>
                <li>


                    <!-- Product -->
                    <div class="img">
                        <a href="/thoi-trang-nu/do-lot-nu/ao-lot/combo-2-ao-la-canh-buom-co-mut_p60838.html?cmpid=60838&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=3">
                            <img width="235" height="235" src="http://resources.cungmua.com/Product/cm_s60838.jpg" alt="Combo 2 &#225;o l&#225; c&#225;nh bướm c&#243; m&#250;t" class="deal" />
                        </a>
                        <div class="listdeal_hover_B">
                            <span class="text_alert">Giao sản phẩm to&#224;n quốc</span>
                            <a class="btn_view" href="/thoi-trang-nu/do-lot-nu/ao-lot/combo-2-ao-la-canh-buom-co-mut_p60838.html?cmpid=60838&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=3">XEM NGAY</a>
                        </div>
                    </div>
                    <div class="listdeal_info">
                        <a class="list_name" href="/thoi-trang-nu/do-lot-nu/ao-lot/combo-2-ao-la-canh-buom-co-mut_p60838.html?cmpid=60838&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=3">Combo 2 &#225;o l&#225; c&#225;nh bướm c&#243; m&#250;t</a>
                        <div class="listdeal_group">
                            <p class="listdeal_info_L num_down">49<span class="percent">%</span></p>
                            <p class="listdeal_info_Ce">
                                <span class="trueprice">195.000đ</span><br />
                                <span class="price">99.000đ</span>
                            </p>
                            <div class="listdeal_info_R">
                                <p class="num_people">
                                    <span class="ic_cm icon-num-people">f</span><span class="text_num_people">71</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-->

                </li>
                <li>


                    <!-- Product -->
                    <div class="img">
                        <a href="/thoi-trang-nu/quan-nu/quan-kieu/quan-culottes-thoi-trang-sang-chanh_p74428.html?cmpid=74428&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=4">
                            <img width="235" height="235" src="http://resources.cungmua.com/Product/cm_s74428.jpg" alt="Quần Culottes thời trang sang chảnh" class="deal" />
                        </a>
                        <p class="num_product_hover_T">Có 2 lựa chọn</p>
                        <div class="listdeal_hover_B">
                            <span class="text_alert">Giao sản phẩm to&#224;n quốc</span>
                            <a class="btn_view" href="/thoi-trang-nu/quan-nu/quan-kieu/quan-culottes-thoi-trang-sang-chanh_p74428.html?cmpid=74428&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=4">XEM NGAY</a>
                        </div>
                    </div>
                    <div class="listdeal_info">
                        <a class="list_name" href="/thoi-trang-nu/quan-nu/quan-kieu/quan-culottes-thoi-trang-sang-chanh_p74428.html?cmpid=74428&amp;cmps=home_page&amp;cmpm=list_t2&amp;cmpc=4">Quần Culottes thời trang sang chảnh</a>
                        <div class="listdeal_group">
                            <p class="listdeal_info_L num_down">50<span class="percent">%</span></p>
                            <p class="listdeal_info_Ce">
                                <span class="trueprice">278.000đ</span><br />
                                <span class="price">139.000đ</span>
                            </p>
                            <div class="listdeal_info_R">
                                <p class="num_people">
                                    <span class="ic_cm icon-num-people">f</span><span class="text_num_people">53</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-->

                </li>


            </ul>
            <div class="text_right">
                <a href="/thoi-trang-nu">XEM TOÀN BỘ KHUYẾN MÃI THỜI TRANG NỮ >></a>
            </div>
            <div class="banner_center">
                <a target="_self" href="http://www.cungmua.com/san-hang-chat-gia-bat-ngo-tren-app?utm_source=web&amp;utm_medium=bangiuatang&amp;utm_campaign=sanhangchat_240915?cmpid=0&amp;cmps=home_page&amp;cmpm=list_t2_banner&amp;cmpc=6">
                    <img alt="Săn h&#224;ng chất" src="http://resources.cungmua.com/CMBanner/635790296202024876.gif" width="1000" height="110" />
                </a>
            </div>
        </div>
    </div>
    <?php echo $this->element('new_footer');?>
</div>
<div class="top_control" style="display: none"><a href="javascript:void(0);" class="btn_top"></a>
</div>

<script>
    var cartUrl = '<?php echo $this->Html->url(array(
        'controller' => 'pages',
        'action' => 'cart'
    ))?>';
</script>
<?php
echo $this->Html->script(array('bootstrap','action'));
echo $this->fetch('script');
?>
</body>
</html>