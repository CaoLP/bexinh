<?php if(isset($data['products']) && count($data['products'])): ?>
<div class="panel in-line">
    <div class="<?php echo $data['class']?>"></div>
    <div class="panel-heading para-an has-icon">
            <h3>
                <a href="<?php echo $data['url']?>">
                <?php echo $data['title']?>
            </a>
            <small class="pull-right">
                        <?php if(isset($data['use_paginate'])){?>
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
                        <?php } else {?>
                            <a href="<?php echo $data['url']?>">Xem thêm</a>
                        <?php } ?>
                    </small>
            </h3>
    </div>
    <div class="panel-body lady-in">
        <?php foreach ($data['products'] as $p): ?>
            <div class="col-md-4 you-para">
                    <a href="<?php
                    echo $this->Html->url(
                        array(
                            'controller' => 'pages',
                            'action' => 'view',
                            'category' => $p['Category']['slug'],
                            'slug' => $p['Product']['slug'],
                        )
                    )
                    ?>">
                        <?php echo $this->Media->image($p['Thumb']['file'], $data['img_w'], $data['img_h'], array('class'=>'img-responsive pic-in', 'disable_size'=>true)); ?>
                    </a>
                <?php// if(isset($p['Promote']['value'])){  ?>
                    <div class="you-in">
                        <span><?php// echo $p['Promote']['value'];?>15<label>%</label></span>
                        <small>off</small>
                    </div>
                <?php// }  ?>
                <p><?php echo $p['Product']['name']; ?></p>
                <?php
                    if(isset($p['Promote']['value'])){
                        echo "<span class=\"price\">";
                        echo $this->App->format_money(h($p['Product']['price']), $p['Promote']['value']);
                        echo "<small class=\"price2\">";
                        echo $this->App->format_money(h($p['Product']['price']));
                        echo "</small>";
                    }else{
                        echo "<span class=\"price\">";
                        echo $this->App->format_money(h($p['Product']['price']));
                    }
                    ?>  | <a href="#" class="pull-right btn-buy add-cart"><label class="cat-in"></label> Thêm vào giỏ</a></span>
                </div>
        <?php endforeach; ?>
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
    </div>
</div>
<?php endif;?>