<?php if (isset($data['products']) && count($data['products'])): ?>
    <div class="index_middle">
        <div class="container1" data-floor="<?php echo $data['class']?>">
            <?php if(!empty($data['use_title']) && $data['use_title']) :?>
            <div class="title_home">
                <p class="bg_ic ic_text"><a href="<?php echo $data['url'] ?>" class="title_home_text"><?php echo $data['title'] ?></a></p>
                <ul class="title_link">
                <li><a href="<?php echo $data['url'] ?>" class="ic_cm link_next">i</a></li>
                    <?php if(!empty($data['cats'])):?>
                    <?php
                    $cats = array_reverse($data['cats']);
                    $no = 0;
                    foreach($cats as $cat_key => $cat):
                    $no++;
                    ?>
                    <li>
                        <a href="<?php echo $this->Html->url('/'.$cat['Category']['slug']);?>" class="<?php if($no == 1) echo 'end';?>">
                            <?php echo $cat['Category']['name']?>
                        </a>
                    </li>
                    <?php endforeach;?>
                    <?php endif;?>
                </ul>
            </div>
            <?php endif;?>
            <?php
            $count = 0;
            $col = 12 / $data['total'];
            foreach ($data['products'] as $p):?>
                <?php $check = $count % $data['total']; ?>
                <?php if ($count == 0) { ?>
                    <ul class="listdeal_four">
                    <li>
                    <?php
                }else if ($check == 0 && $count != 0) {
                    ?>
                    </li>
                    <!--/row-->
                    </ul>
                    <ul class="listdeal_four">
                    <li>

                <?php } else {
                    ?>
                    <li>
                <?php
                }?>
                <!-- Product -->
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
                        ?>">
                        <?php echo $this->Media->image(
                                $p['Thumb']['file'],
                                $data['img_w'],
                                $data['img_h'],
                                array('class' => 'deal'),
                                true ); ?>
                        </a>
                        <div class="listdeal_hover_B">
                            <a class="btn_view" href="<?php
                        echo $this->Html->url(
                            array(
                                'controller' => 'pages',
                                'action' => 'view',
                                'category' => $p['Category']['slug'],
                                'slug' => $p['Product']['slug'],
                            )
                        )
                        ?>">XEM NGAY</a>
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
                        <a class="list_name" href="<?php
                        echo $this->Html->url(
                            array(
                                'controller' => 'pages',
                                'action' => 'view',
                                'category' => $p['Category']['slug'],
                                'slug' => $p['Product']['slug'],
                            )
                        )
                        ?>"><?php echo $p['Product']['name']; ?></a>
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
                    <!-- End Product-->
                <?php
                $count++;
                if ($count == count($data['products'])) {
                    ?>
                    </li>
                    </ul>
                <?php } ?>
            <?php endforeach; ?>
            <div class="text_right">
                <a href="<?php echo $data['url'] ?>">Xem toàn bộ <?php echo $data['title'] ?> >></a>
            </div>
            <div class="banner_center">
                <a target="_self" href="http://www.cungmua.com/san-hang-chat-gia-bat-ngo-tren-app?utm_source=web&amp;utm_medium=bangiuatang&amp;utm_campaign=sanhangchat_240915?cmpid=0&amp;cmps=home_page&amp;cmpm=list_t2_banner&amp;cmpc=6">
                    <img alt="Săn h&#224;ng chất" src="http://resources.cungmua.com/CMBanner/635790296202024876.gif" width="1000" height="110" />
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>
