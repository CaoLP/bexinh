<div class="header-top">
    <div class="header-bottom-bottom">
        <div class="logo">
            <a href="<?php echo $this->Html->url('/')?>">
                <?php echo $this->Html->image('logo.png', array('alt'=>Configure::read('Site.title')))?>
            </a>
        </div>
        <div class="top-nav">
            <span class="menu"></span>
            <?php echo $this->element('category_menu'); ?>
            <div class="clearfix"> </div>
        </div>
        <div class="shop-cart pull-right">
            <ul class="nav navbar-nav navbar-right">
                <?php
                $cart = $this->Session->read('Shop.cart');
                $html_cart = '';
                $total = 0;
                if(count($cart) > 0)
                    foreach ($cart as $key=>$item) {
                        $price = $item['OrderDetail']['price'];
                        if (isset($item['OrderDetail']['promote_value'])) {
                            $price = $price - ($price * ($item['OrderDetail']['promote_value'] / 100));
                        }
                        $ops = '';
                        if(isset($item['OrderDetail']['options']) && count($item['OrderDetail']['options']) > 0){
                            $ops = array();
                            foreach( $item['OrderDetail']['options'] as $k=>$op){
                                $ops[] = explode('|',$op)[1];
                            }
                            $ops = implode(', ', $ops);
                        }
                        $sum = $price * $item['OrderDetail']['qty'];
                        $total += $sum;
                        $html_cart .= "<li>
                            <div class=\"item\">
                                <div class=\"item-left\">
                                    {$this->Media->image($item['OrderDetail']['thumb'], 50, 50, array())}
                                    <div class=\"item-info\">
                                        <div class=\"name\">{$item['OrderDetail']['name']}</div>
                                        <div class=\"option\">{$ops}</div>
                                        <div class=\"price\">
                                            <small>({$item['OrderDetail']['qty']}) {$this->App->format_money($sum)}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item-right\">
                                    <button data-id=\"{$key}\" class=\"btn btn-xs btn-danger pull-right remove\">x</button>
                                </div>
                            </div>
                        </li>";
                    }

                ?>

                <li class="dropdown" id="cart">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <div class="price pull-left">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <?php echo $this->App->format_cart_money($total); ?>
                        </div>
                        (<?php echo count($cart); ?>)
                    </a>
                    <ul class="dropdown-menu dropdown-cart" role="menu">
                        <?php echo $html_cart; ?>
                        <li><a class="text-center" href="<?php
                            echo $this->Html->url(array(
                                'controller' => 'pages',
                                'action' => 'cart'
                            ));
                            ?>">Xem giỏ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="search">
            <form action="<?php echo $this->Html->url('/tim-kiem')?>">
                <input type="text" name="q" value="" placeholder="Tìm kiếm...">
                <input type="submit" value="">
            </form>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>