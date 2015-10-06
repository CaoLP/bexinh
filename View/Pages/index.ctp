    <div class="index_middle">
        <div class="container dad">
            <div class="menu_cate">
                <ul class="menu_ver">
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'new_products')); ?>">
                            <span class="ic_cm icon-new">C</span>Hàng mới về</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'promote_products')); ?>">
                            <span class="ic_cm icon-promote">B</span>Hàng khuyến mãi</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'best_sale')); ?>">
                            <span class="ic_cm icon-userlike">4</span>Hàng được ưa chuộm</a>
                    </li>
                    <?php echo $this->Menu->loadCategory2($categories, 'Category','children', false);?>
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
                        <li data-floor-index="T1"><a href="javascript:void(0);" class="ic_cm">R</a>

                            <div class="menu_H_info">Có thể bạn thích</div>
                        </li>
                        <li data-floor-index="new"><a href="javascript:void(0);" class="ic_cm " data-click="#tab3">C</a>

                            <div class="menu_H_info">Hàng mới về</div>
                        </li>
                        <li data-floor-index="sale"><a href="javascript:void(0);" class="ic_cm " data-click="#tab1">B</a>

                            <div class="menu_H_info">Hàng khuyến mãi</div>
                        </li>
                        <li data-floor-index="hot"><a href="javascript:void(0);" class="ic_cm " data-click="#tab2">4</a>

                            <div class="menu_H_info">Hàng được ưa chuộm</div>
                        </li>
                        <?php foreach ($products as $cat) : ?>
                            <?php if (count($cat['products'])) : ?>
                                <li data-floor-index="<?php echo $cat['Category']['slug'] ?>"><a
                                        href="javascript:void(0);"
                                        class="ic_cm "><?php echo $cat['Category']['icon'] ?></a>

                                    <div class="menu_H_info"><?php echo $cat['Category']['name'] ?></div>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <script type="text/javascript">
                $(function () {
                    $("#floorjumping li").click(function (e) {
                        e.preventDefault();
                        var target = $(this).find('a').data('click');
                        var offset = 25;
                        if(typeof target != "undefined"){
                            target = target.replace('#','');
                            $('*[aria-controls="'+target+'"]').click();
                            offset += 25;
                        }
                        var flrIdx = $(this).attr("data-floor-index");
                        $("html, body").animate({scrollTop: $("[data-floor=" + flrIdx + "]").offset().top - offset});

                    });
                });
            </script>
        </div>
    </div>
    <div class="index_middle" data-floor="T1">
        <div class="container1">
            <div class="title_home">
                <p class="bg_ic"><span class="ic_cm icon-flash">w</span></p>

                <div class="title_home_text">
                    <a href="javascript:;">Có thể bạn thích</a>
                </div>
                <ul class="title_menu" id="order-flashsale" role="tablist">
                    <li class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="ic_cm">.</span> ĐANG SALE</a></li>
                    <li><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><span class="ic_cm">4</span> ĐANG HOT</a></li>
                    <li><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><span class="ic_cm">C</span> MỚI NHẤT</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab1">
                    <?php
                    echo $this->element(
                        'slide-product_1',
                        array(
                            'data' => array(
                                'title' => 'SẢN PHẨM KHUYẾN MÃI',
                                'class' => 'sale',
                                'url' => $this->Html->url(array('controller' => 'pages', 'action' => 'promote_products')),
                                'products' => $promote_products,
                                'img_w' => 300,
                                'img_h' => 415,
                                'total' => 4,
                                'use_title' => false,
                            )
                        )
                    );
                    ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab2">
                    <?php
                    echo $this->element(
                        'slide-product_1',
                        array(
                            'data' => array(
                                'title' => 'SẢN PHẨM BÁN CHẠY',
                                'class' => 'hot',
                                'url' => $this->Html->url(array('controller' => 'pages', 'action' => 'best_sale')),
                                'products' => $best_sale,
                                'img_w' => 300,
                                'img_h' => 415,
                                'total' => 4,
                                'use_title' => false,
                            )
                        )
                    );
                    ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab3">
                    <?php
                    echo $this->element(
                        'slide-product_1',
                        array(
                            'data' => array(
                                'title' => 'SẢN PHẨM MỚI',
                                'class' => 'new',
                                'url' => $this->Html->url(array('controller' => 'pages', 'action' => 'new_products')),
                                'products' => $new_products,
                                'img_w' => 300,
                                'img_h' => 415,
                                'total' => 4,
                                'use_title' => false,
                            )
                        )
                    );
                    ?>
                </div>
            </div>
            <!--           product here <div></div>-->
        </div>
    </div>
<?php
foreach ($products as $p) {
    echo $this->element(
        'slide-product_1',
        array(
            'data' => array(
                'title' => $p['Category']['name'],
                'class' => $p['Category']['slug'],
                'url' => $this->Html->url('/' . $p['Category']['slug']),
                'products' => $p['products'],
                'cats' => $p['children'],
                'img_w' => 300,
                'img_h' => 415,
                'total' => 4,
                'use_title' => true,
            )
        )
    );
}
?>