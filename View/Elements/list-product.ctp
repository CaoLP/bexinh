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
    <div class="panel-body">
        <?php
            $i=0 ;
            foreach ($data['products'] as $p):
            if($i == 0){ echo '<div class="row">';}
            if($i > 0 && $i%4 ==0){ echo '</div><div class="row">';}
            ?>

            <div class="col-md-3 text-center product-item">
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

                <div class="info">
                    <span class="brdname"><?php
                        if (isset($providers[$p['Product']['provider_id']])) {
                            ?>
                        <a href="<?php
                        echo $this->Html->url(
                            array(
                                'controller' => 'pages',
                                'action' => 'brand',
                                'provider' => $providers[$p['Product']['provider_id']]['slug'],
                            )
                        )
                        ?>">
                            <?php
                            if(!empty($providers[$p['Product']['provider_id']]['thumb'])){
                                echo $this->Html->image(
                                    Configure::read('Img.path')
                                    . $providers[$p['Product']['provider_id']]['thumb'],
                                    array('height' => '35')
                                );
                            }
                            else
                                echo $providers[$p['Product']['provider_id']]['name'];
                        }
                        ?></a></span>
                    <h3>
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
                           title="<?php echo $p['Product']['name']; ?>"><?php echo $p['Product']['name']; ?></a></h3>

                    <?php
                    if (isset($p['Promote']['value'])) {
                        ?>
                        <del><?php echo $this->App->format_money(h($p['Product']['price']), $p['Promote']['value']); ?></del>
                        <br>
                        <?php
                    } ?>
                    <span class="price dodam"><?php echo $this->App->format_money(h($p['Product']['price'])); ?></span>
                    <?php
                    if (isset($p['Promote']['value'])) {
                        ?>
                        <span class="down"><?php echo $p['Promote']['value']; ?>%</span>
                        <?php
                    } ?>

                </div>

            </div>
        <?php
            if($i == count($data['products'])-1){ echo "</div>" ;}
            $i++;
            endforeach;
        ?>
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