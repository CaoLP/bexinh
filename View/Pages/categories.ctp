<div class="index_middle">
    <div class="silde_banner">
        <div class="bx-wrapper">
            <div class="bx-viewport" style="">
                <?php if(!empty($cat['Thumb']['file'])):?>
                <ul class="slide" style="">
                    <li style="" class="bx-clone">
                        <a style="display:block; background:url('<?php echo $this->Html->url($cat['Thumb']['file'],true);?>') no-repeat center; height:245px;" href="<?php
                        echo $this->Html->url(array('controller' => 'pages', 'action' => 'categories', 'category' => $cat['Category']['slug']))
                        ?>"></a>
                    </li>
                </ul>
                <?php endif;?>
                <div class="inside_banner">
                    <div class="container inside_co">
                        <ul class="breadcrumb">
                            <li><a href="<?php
                                echo $this->Html->url(array('controller' => 'pages', 'action' => 'index'))
                                ?>"><span class="ic_cm icon-home">c</span></a></li>
                            <?php foreach($parentlist as $k=>$pa):?>
                                <li>
                                    <a href="<?php
                                    echo $this->Html->url(
                                        array(
                                            'controller' => 'pages',
                                            'action' => 'categories',
                                            'category' => $pa['Category']['slug']
                                        )
                                    )
                                    ?>"><?php echo $pa['Category']['name'];?></a>
                                </li>
                                <?php if(($k + 2)== count($parentlist)) break;?>
                            <?php endforeach;?>
                            <li><?php echo $cat['Category']['name'];?></li>
                        </ul>
                        <div class="cate_menu_hoz">
                            <ul class="menu_cate_hoz">
                                <li class="active"><a href="<?php
                                    echo $this->Html->url(
                                        array(
                                            'controller' => 'pages',
                                            'action' => 'categories',
                                            'category' => $cat['Category']['slug']
                                        )
                                    )
                                    ?>">Tất cả</a></li>
                                <?php foreach($cat['ChildCategory'] as $child):?>
                                    <li class=""><a href="<?php
                                        echo $this->Html->url(
                                            array(
                                                'controller' => 'pages',
                                                'action' => 'categories',
                                                'category' => $child['slug']
                                            )
                                        )
                                        ?>"><?php echo $child['name'];?></a></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="index_middle" id="p-content">
    <div class="container1">
        <?php
        echo $this->element(
            'list-product',
            array(
                'data' => array(
                    'title'=> $title_for_layout,
                    'class' => 'cart',
                    'url'=> $this->Html->url(array('controller' => 'pages', 'action' => 'products')),
                    'products'=> $products,
                    'img_w' => 477,
                    'img_h' => 477,
                    'use_paginate' => true,
                )
            )
        );
        ?>
    </div>
</div>