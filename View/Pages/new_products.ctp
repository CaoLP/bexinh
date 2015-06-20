<div class="col-md-2" id="side">
    <?php echo $this->element('sidebar');?>
</div>
<div class="col-md-10" id="p-content">
    <?php
    echo $this->element(
        'list-product',
        array(
            'data' => array(
                'title'=>'SẢN PHẨM MỚI',
                'class' => 'cart',
                'url'=> $this->Html->url(array('controller' => 'pages', 'action' => 'products')),
                'products'=> $products,
                'img_w' => 300,
                'img_h' => 315,
                'use_paginate' => true,
            )
        )
    );
    ?>
</div>