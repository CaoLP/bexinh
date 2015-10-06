<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title><?php echo Configure::read('Site.title') . ' | ' .$title_for_layout ;?></title>
    <?php echo $this->element('seo')?>
    <?php
    echo $this->fetch('meta');
    echo $this->Html->css(array('bootstrap.min', 'base', 'plugins', 'new_custom'));
    echo $this->Html->script(array('jquery-2.1.1.min'));
    echo $this->fetch('css');
    ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,vietnamese'
          rel='stylesheet' type='text/css'>

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
<?php echo $this->element('facebook'); ?>

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
                            <a><span class="icon-phone ic_cm">D</span>Hỗ trợ: 19006637 (8h-21h)<span
                                    class="ic_cm icon-arrow-d">k</span></a>

                            <div class="hover_menu">
                                <ul class="list_hotline">
                                    <li><a href='/phuong-thuc-van-chuyen'>Phương thức vận chuyển </a></li>
                                    <li><a href='/chinh-sach-doi-tra'>Chính sách đổi trả</a></li>
                                    <li><a href='/su-dung-voucher'>Sử dụng voucher</a></li>
                                    <li class="email"><span class="ic_cm icon-email">2</span><a
                                            href="mailto:hotro@cungmua.com">hotro@cungmua.com</a></li>
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
                                <?php
                                $cart = $this->Session->read('Shop.cart');
                                ?>
                                <a href="<?php
                                echo $this->Html->url(array(
                                    'controller' => 'pages',
                                    'action' => 'cart'
                                ));
                                ?>">Giỏ hàng (<span><?php echo count($cart); ?></span>)<span class="ic_cm icon-arrow-d">k</span></a>

                                <div class="hover_menu">
                                    <?php
                                    if (count($cart) > 0) {
                                        $html_cart = '<ul class="shop_cart_list">';
                                        $total = 0;
                                        foreach ($cart as $key => $item) {
                                            $price = $item['OrderDetail']['price'];
                                            if (isset($item['OrderDetail']['promote_value'])) {
                                                $price = $price - ($price * ($item['OrderDetail']['promote_value'] / 100));
                                            }
                                            $ops = '';
                                            if (isset($item['OrderDetail']['options']) && count($item['OrderDetail']['options']) > 0) {
                                                $ops = array();
                                                foreach ($item['OrderDetail']['options'] as $k => $op) {
                                                    $ops[] = explode('|', $op)[1];
                                                }
                                                $ops = implode(', ', $ops);
                                            }
                                            $sum = $price * $item['OrderDetail']['qty'];
                                            $total += $sum;
                                            $html_cart .= "
                                            <li class=\"cart_item\">
                                            <a href=\"\" class=\"product_img\">
                                            {$this->Media->image($item['OrderDetail']['thumb'], 50, 50, array())}
                                            </a>
                                            <a href=\"\" class=\"product_name\">
                                            {$item['OrderDetail']['name']}
                                            </a>
                                            <span>{$ops}</span>
                                            <span class=\"product_sum\">Số lượng: {$item['OrderDetail']['qty']}</span>
                                            <a href=\"javascript:;\" data-id=\"{$key}\" class=\"product_sum_de remove\">x</a>
                                        </li>";
                                        }
                                        $html_cart .= '<li class="sum_cart"> Tổng cộng:<span>' . $this->App->format_cart_money($total) . '</span> </li>';
                                        $html_cart .= '<li class="btn">
                                            <button class="btn_brand1" onclick="location.href = \'' .
                                            $this->Html->url(array(
                                                'controller' => 'pages',
                                                'action' => 'cart'
                                            ))
                                            . '\'">XEM GIỎ HÀNG</button>
                                        </li>';
                                        $html_cart .= '</ul>';
                                        echo $html_cart;
                                    } else {
                                        ?>
                                        <p class="hover_TT">Giỏ hàng của bạn</p>
                                        <p class="no_item">
                                            Hiện chưa có sản phẩm nào
                                            <br/>
                                            trong giỏ hàng của bạn
                                        </p>
                                    <?php } ?>
                                </div>

                            </div>
                        </li>
                        <!-- end cart -->
                    </ul>
                </div>
            </div>
        </div>
        <!--EndDonut-->
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
                            <?php echo $this->Menu->loadCategory2($categories, 'Category', 'children', false); ?>

                        </ul>
                    </div>
                </nav>
                <div class="logo_cungmua"><a href="/" class="logo_cungmua"><img alt="cungmua" src="/img/logo.png"
                                                                                height="34"/></a></div>
                <div class="menu_right_home">
                    <div id="divSearch" class="search">
                        <form id="frmSearch" method="GET">
                            <input type="text" id="search" name="q" autocomplete="off" placeholder="Tìm kiếm..."
                                   maxlength="200"/>
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
                                    <li class="email"><span class="ic_cm icon-email">2</span><a
                                            href="mailto:hotro@cungmua.com">hotro@cungmua.com</a></li>
                                    <li class="phone"><span class="icon-phone ic_cm">D</span>

                                        <p class="bold">19006637</p>

                                        <p>(8h - 21h kể cả Thứ 7 - Chủ Nhật)</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li id="cartTopScroll">

                            <a href="/checkout/gio-hang">Giỏ hàng (<span>0</span>)<span
                                    class="ic_cm icon-arrow-d">k</span></a>

                            <div class="hover_menu">
                                <p class="hover_TT">Giỏ hàng của bạn</p>

                                <p class="no_item">
                                    Hiện chưa có sản phẩm nào
                                    <br/>
                                    trong giỏ hàng của bạn
                                </p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('new_footer'); ?>
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
echo $this->Html->script(array('bootstrap', 'action'));
echo $this->fetch('script');
?>
</body>
</html>