<?php if (isset($data['products']) && count($data['products'])): ?>
    <div class="title_deal">
        <div class="title_deal_text"><?php echo $data['title'] ?>
            <span class="ic_cm">T</span>
            <span class="colortext"><?php echo $this->Paginator->param('count'); ?></span>SẢN PHẨM
        </div>
    </div>
    <?php if(isset($data['use_paginate'])){?>
        <div class="row">
            <div class="col-lg-12 m-b-30">
                <small class="pull-right">
                    <?php
                    $params = $this->Paginator->params();
                    if ($params['pageCount'] > 1) {
                        ?>
                        <ul class="pagination pagination-sm">
                            <?php
                            echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
                            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
                            echo $this->Paginator->next('Next &rarr;', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
                            ?>
                        </ul>
                    <?php } ?>
                </small>
            </div>
        </div>
    <?php } ?>
    <ul class="listdeal_three">
        <?php foreach ($data['products'] as $p): ?>
            <li>
                <!-- product -->
                <div class="img">
                    <a href="<?php
                    echo $this->Html->url(
                        array(
                            'controller' => 'pages',
                            'action' => 'view',
                            'category' => $p['Category']['slug'],
                            'slug' => $p['Product']['slug'],
                        )
                    )
                    ?>" title="<?php echo $p['Product']['name']; ?>">
                        <?php echo $this->Media->image($p['Thumb']['file'], $data['img_w'], $data['img_h'],
                            array('class'=>'img-responsive pic-in', 'disable_size'=>true, 'alt' => $p['Product']['name'])); ?>
                    </a>
                    <div class="listdeal_hover_B">
                        <a href="<?php
                        echo $this->Html->url(
                            array(
                                'controller' => 'pages',
                                'action' => 'view',
                                'category' => $p['Category']['slug'],
                                'slug' => $p['Product']['slug'],
                            )
                        )
                        ?>"
                           class="btn_view" title="<?php echo $p['Product']['name']; ?>">XEM NGAY</a>
                    </div>
                </div>
                <div class="listdeal_info">
                    <span class="brdname"><?php
                        if(isset($providers[$p['Product']['provider_id']])){
                            echo $this->Html->image(
                                Configure::read('Img.path')
                                .$providers[$p['Product']['provider_id']]['Provider']['thumb'],
                                array('height'=>'35')
                            );
                        }
                        ?>
                    </span>
                    <a class="list_name"
                       href="<?php echo $this->Html->url(
                           array(
                               'controller' => 'pages',
                               'action' => 'view',
                               'category' => $p['Category']['slug'],
                               'slug' => $p['Product']['slug']
                           )
                       ) ?>" title="<?php echo $p['Product']['name']; ?>"><?php echo $p['Product']['name']; ?></a>

                    <div class="listdeal_group">
                        <?php if(isset($p['Promote']['value'])){?>
                            <p class="listdeal_info_L num_down"><?php echo $p['Promote']['value'];?><span class="percent">%</span></p>
                        <?php }?>
                        <p class="listdeal_info_Ce">
                            <?php
                            if(isset($p['Promote']['value'])){
                                echo '<span class="trueprice">';
                                echo $this->App->format_money(h($p['Product']['price']));
                                echo "</span><br />";
                                echo '<span class="price">';
                                echo $this->App->format_money(h($p['Product']['price']), $p['Promote']['value']);
                                echo "</span>";
                            }else{
                                echo '<span class="price">';
                                echo $this->App->format_money(h($p['Product']['price']));
                                echo "</span>";
                            }
                            ?>
                        </p>

                        <div class="listdeal_info_R">
                            <p class="num_people">
                                <span class="ic_cm icon-num-people">f</span><span class="text_num_people">5</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End product -->
            </li>
        <?php endforeach; ?>
    </ul>
    <?php if(isset($data['use_paginate'])){?>
        <div class="row">
            <div class="col-lg-12 m-b-30">
                <small class="pull-right">
                    <?php
                    $params = $this->Paginator->params();
                    if ($params['pageCount'] > 1) {
                        ?>
                        <ul class="pagination pagination-sm">
                            <?php
                            echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
                            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
                            echo $this->Paginator->next('Next &rarr;', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
                            ?>
                        </ul>
                    <?php } ?>
                </small>
            </div>
        </div>
    <?php } ?>
<?php endif; ?>