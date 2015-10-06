<?php
echo $this->element(
    'list-product-other',
    array(
        'data' => array(
            'products' => $products,
            'img_w' => 235,
            'img_h' => 315,
        )
    )
);
