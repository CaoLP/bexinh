<?php
    echo $this->Html->script(array('jquery.etalage.min.js','view.js'),array('inline'=>false));
    echo $this->Html->css(array('etalage.css'),array('inline'=>false));
?>
<div id="p-content">
    <div class="single_grid">
        <div class="grid images_3_of_2">
            <ul id="etalage">
                <?php foreach ($product['Media'] as $media) { ?>
                    <li>
                        <?php echo $this->Media->image($media['file'], 86, 115, array('class'=>'etalage_thumb_image img-responsive', 'disable_size'=>true)); ?>
                        <img src="<?php echo Configure::read('Img.path') . $media['file']; ?>" class="etalage_source_image img-responsive">
                    </li>
                <?php } ?>
            </ul>
            <div class="clearfix"> </div>
        </div>
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
                <div class="share-desc">
                    <div class="share">
                        <h4>Share Product :</h4>
                        <ul class="share_nav">
                            <li><a href="#"><?php $this->Html->image('facebook.png', array('alt'=>'Facebook')) ?></a></li>
                            <li><a href="#"><?php $this->Html->image('twitter.png', array('alt'=>'Twiiter')) ?></a></li>
                            <li><a href="#"><?php $this->Html->image('rss.png', array('alt'=>'Rss')) ?></a></li>
                            <li><a href="#"><?php $this->Html->image('gpluse.png', array('alt'=>'Google+')) ?></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>