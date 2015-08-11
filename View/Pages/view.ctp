<?php
    echo $this->Html->script(array('jquery.etalage.min.js','view.js'),array('inline'=>false));
    echo $this->Html->css(array('etalage.css'),array('inline'=>false));
?>
<div  class="single" id="p-content">
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <ul id="etalage">
                    <?php foreach ($product['Media'] as $media) { ?>
                        <li>
                            <?php echo $this->Media->image($media['file'], 302, 402, array('class'=>'etalage_thumb_image img-responsive', 'disable_size'=>true)); ?>
                            <img src="<?php echo Configure::read('Img.path') . $media['file']; ?>" class="etalage_source_image img-responsive">
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!----- tabs-box ---->
            <div class="row">
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Thông tin sản phẩm</span></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span
                                    class="resp-arrow"></span>Thông tin sản phẩm</h2>

                            <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0"
                                 style="display:block">
                                <div class="facts">
                                    <?php echo $product['Product']['descriptions'] ?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="fb-comments"
                         data-href="<?php echo $this->Html->url($this->request->here,true); ?>"
                         data-numposts="15" data-colorscheme="light">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="span1_of_1_des">
                <div class="desc1">
                    <h3><?php echo $product['Product']['name'] ?> </h3>
                    <p><?php echo $product['Product']['excert'] ?></p>
                    <h5>
                        <?php if (isset($product['Promote']['value'])) {
                            echo '
                                <span class="price-1">
                                ' . $this->App->format_detail_money($product['Product']['price'],$product['Promote']['value']) . '
                                </span>
                                <span class="price-2">
                                ' . $this->App->format_detail_money($product['Product']['price']) . '
                                </span>';
                        }else{
                            echo '
                                <span class="price-1">
                                       ' . $this->App->format_detail_money($product['Product']['price']) . '
                                </span>';
                        }
                        ?>
                    </h5>
                    <?php echo $this->Form->create('OrderDetail',array('id'=>'OrderDetailViewForm','url'=> $this->Html->url(
                        array(
                            'controller' => 'pages',
                            'action' => 'order'
                        )
                    )));
                    echo $this->Form->input('product_id',array('type'=>'hidden','value'=>$product['Product']['id']));
                    echo $this->Form->input('price',array('type'=>'hidden','value'=>$product['Product']['price']));
                    echo $this->Form->input('name',array('type'=>'hidden','value'=>$product['Product']['name']));
                    echo $this->Form->input('sku',array('type'=>'hidden','value'=>$product['Product']['sku']));
                    if(isset($product['Promote']['value'])){
                        echo $this->Form->input('promote_id',array('type'=>'hidden','value'=>$product['Promote']['id']));
                        echo $this->Form->input('promote_value',array('type'=>'hidden','value'=>$product['Promote']['value']));
                        echo $this->Form->input('promote_type',array('type'=>'hidden','value'=>$product['Promote']['type']));
                    }
                    if(isset($product['Product']['thumb']))
                        echo $this->Form->input('thumb',array('type'=>'hidden','value'=>$product['Product']['thumb']));
                    else
                        echo $this->Form->input('thumb',array('type'=>'hidden','value'=>Configure::read('Img.noImage')));
                    $t = $product;
                    unset($t['Product']['descriptions']);
                    echo $this->Form->input('data',array('type'=>'textarea',
                                                         'div'=>array('class'=>'hidden'),
                                                         'value'=> json_encode($t)
                        )
                    );
                    ?>
                    <div class="available">
                        <h4>Thuộc tính :</h4>
                        <ul>
                            <?php
                            foreach($options as $key=>$option){
                                echo " <li><span class=\"prop-name\">{$key} : </span>";
                                if(count($option) <= 1){
                                    foreach($option as $op){
                                        echo "<span class=\"prop-val\">{$op['name']}</span>";
                                        //                                                echo $this->Form->input('options.',array('type'=>'hidden','value'=>$op['id'].'-'.$op['name'], 'div'=>false,'label'=>false));
                                    }
                                }else{
                                    $temp = array();
                                    foreach($option as $each){
                                        $each['group_name'] = $key;
                                        $temp[] = $each;
                                    }
                                    echo "<span class=\"prop-val\">";
                                    $ops = Set::combine($temp,array('{0}|{1}: {2}','{n}.id','{n}.group_name','{n}.name'),'{n}.name');
                                    echo $this->Form->input('options.',array('options'=>$ops, 'div'=>false,'label'=>false));
                                    echo "</span>";
                                }
                                echo '</li>';
                            }
                            ?>
                        </ul>
                        <div class="form-in">
                            <a href="javascript:;" class="buy">Mua</a>
                            <a href="javascript:;" class="add-cart">Cho vào giỏ</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php echo $this->Form->end();?>
                    <div class="share-desc">
                        <div class="share">
                            <h4>Chia sẻ :</h4>
                            <ul class="share_nav">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php
                                    echo $this->Html->url(
                                        array(
                                            'controller' => 'pages',
                                            'action' => 'view',
                                            'category' => $product['Category']['slug'],
                                            'slug' => $product['Product']['slug'],
                                        ),true
                                    );
                                    ?>&t=<?php echo $product['Product']['name'];?>"
                                       class="share-popup"
                                       target="_blank" title="Share on Facebook"><?php echo $this->Html->image('facebook.png', array('alt'=>'Facebook')) ?></a></li>
                                <li><a href="http://twitter.com/share?url=<?php
                                    echo $this->Html->url(
                                        array(
                                            'controller' => 'pages',
                                            'action' => 'view',
                                            'category' => $product['Category']['slug'],
                                            'slug' => $product['Product']['slug'],
                                        ),true
                                    );
                                    ?>&text=<?php echo $product['Product']['name'];?>"
                                       class="share-popup"
                                       target="_blank" title="Share on Twitter"><?php echo $this->Html->image('twitter.png', array('alt'=>'Twiiter')) ?></a></li>
                                <li><a href="https://plus.google.com/share?url=<?php
                                    echo $this->Html->url(
                                        array(
                                            'controller' => 'pages',
                                            'action' => 'view',
                                            'category' => $product['Category']['slug'],
                                            'slug' => $product['Product']['slug'],
                                        ),true
                                    );
                                    ?>&t=<?php echo $product['Product']['name'];?>"
                                       class="share-popup"
                                       target="_blank" title="Share on Google+"><?php echo $this->Html->image('gpluse.png', array('alt'=>'Google+')) ?></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row m-top-10">
                        <div
                            class="fb-like"
                            data-share="true"
                            data-width="450"
                            data-show-faces="true">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>