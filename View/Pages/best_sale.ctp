<div class="single" id="p-content">
    <?php
    echo $this->element(
        'list-product',
        array(
            'data' => array(
                'title'=>'SẢN PHẨM BÁN CHẠY',
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