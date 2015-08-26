<?php
echo $this->Html->script(array('jquery.etalage.min.js', 'view.js'), array('inline' => false));
echo $this->Html->css(array('etalage.css'), array('inline' => false));
?>
<script>
    var relative = "<?php echo $this->Html->url(array(
        'controller'=>'pages',
        'action'=>'relative',
    ))?>";
    var category = "<?php echo $product['Product']['category_id'];?>";
</script>
<article>
    <ul class="breadcrumb_B">
        <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
        <li>
            <a href="/<?php echo $product['Category']['slug']; ?>"><?php echo $product['Category']['name']; ?></a>
        </li>
        <li><?php echo $product['Product']['name']; ?></li>
    </ul>
</article>
<article class="row">
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <ul id="etalage">
                    <?php foreach ($product['Media'] as $media) { ?>
                        <li>
                            <?php echo $this->Media->image($media['file'], 302, 502, array('class' => 'etalage_thumb_image img-responsive', 'disable_size' => true),true); ?>
                            <img src="<?php echo Configure::read('Img.path') . $media['file']; ?>"
                                 class="etalage_source_image img-responsive">
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-12">
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
                                    ), true
                                );
                                ?>&t=<?php echo $product['Product']['name']; ?>"
                                   class="share-popup"
                                   target="_blank"
                                   title="Share on Facebook"><?php echo $this->Html->image('facebook.png', array('alt' => 'Facebook')) ?></a>
                            </li>
                            <li><a href="http://twitter.com/share?url=<?php
                                echo $this->Html->url(
                                    array(
                                        'controller' => 'pages',
                                        'action' => 'view',
                                        'category' => $product['Category']['slug'],
                                        'slug' => $product['Product']['slug'],
                                    ), true
                                );
                                ?>&text=<?php echo $product['Product']['name']; ?>"
                                   class="share-popup"
                                   target="_blank"
                                   title="Share on Twitter"><?php echo $this->Html->image('twitter.png', array('alt' => 'Twiiter')) ?></a>
                            </li>
                            <li><a href="https://plus.google.com/share?url=<?php
                                echo $this->Html->url(
                                    array(
                                        'controller' => 'pages',
                                        'action' => 'view',
                                        'category' => $product['Category']['slug'],
                                        'slug' => $product['Product']['slug'],
                                    ), true
                                );
                                ?>&t=<?php echo $product['Product']['name']; ?>"
                                   class="share-popup"
                                   target="_blank"
                                   title="Share on Google+"><?php echo $this->Html->image('gpluse.png', array('alt' => 'Google+')) ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <span class="text_note">Có thể bạn quan tâm</span>

            <div class="col-md-12" id="relative-1">

            </div>
        </div>

    </div>
    <div class="col-md-5">
        <div class="span1_of_1_des">
            <div class="desc1">
                <h3><?php echo $product['Product']['name'] ?> </h3>

                <p><?php echo $product['Product']['excert'] ?></p>

                <div class="detail_bar">
                    <p class="bg_price">
                        <?php if (isset($product['Promote']['value'])) { ?>
                            <span id="detail_trueprice"
                                  class="detail_trueprice"><?php echo $this->App->format_detail_money($product['Product']['price'], $product['Promote']['value']); ?></span>
                            <br>
                        <?php } ?>
                        <span id="price"
                              class="detail_price"><?php echo $this->App->format_detail_money($product['Product']['price']); ?></span>
                    </p>
                    <?php if (isset($product['Promote']['value'])) { ?>
                        <p class="detail_precent">52<span>%</span></p>
                    <?php } ?>

                    <div class="likeface">
                        Mã SP: <?php echo $product['Product']['sku']; ?>
                        <br>

                        <div
                            data-layout="button_count"
                            class="fb-like"
                            data-share="true"
                            data-show-faces="true">
                        </div>
                    </div>
                    <br class="clean">
                </div>
                <?php echo $this->Form->create('OrderDetail', array('id' => 'OrderDetailViewForm', 'url' => $this->Html->url(
                    array(
                        'controller' => 'pages',
                        'action' => 'order'
                    )
                )));
                echo $this->Form->input('product_id', array('type' => 'hidden', 'value' => $product['Product']['id']));
                echo $this->Form->input('price', array('type' => 'hidden', 'value' => $product['Product']['price']));
                echo $this->Form->input('name', array('type' => 'hidden', 'value' => $product['Product']['name']));
                echo $this->Form->input('sku', array('type' => 'hidden', 'value' => $product['Product']['sku']));
                if (isset($product['Promote']['value'])) {
                    echo $this->Form->input('promote_id', array('type' => 'hidden', 'value' => $product['Promote']['id']));
                    echo $this->Form->input('promote_value', array('type' => 'hidden', 'value' => $product['Promote']['value']));
                    echo $this->Form->input('promote_type', array('type' => 'hidden', 'value' => $product['Promote']['type']));
                }
                if (isset($product['Product']['thumb']))
                    echo $this->Form->input('thumb', array('type' => 'hidden', 'value' => $product['Product']['thumb']));
                else
                    echo $this->Form->input('thumb', array('type' => 'hidden', 'value' => Configure::read('Img.noImage')));
                $t = $product;
                unset($t['Product']['descriptions']);
                echo $this->Form->input('data', array('type' => 'textarea',
                        'div' => array('class' => 'hidden'),
                        'value' => json_encode($t)
                    )
                );
                ?>
                <?php
                foreach ($options as $key => $option) {
                    if (count($option) > 1) {
                        echo " <span class=\"text_note\">{$key} </span>";
                        echo "<ul id=\"choose_size\" class=\"choose_size\">";
                        $temp = array();
                        $i = 0;
                        foreach ($option as $each) {
                            $select = '';
                            if ($i == 0) $select = 'checked="checked"';
                            $i += 1;
                            ?>
                            <li>
                                <input type="radio" <?php echo $select; ?> class="radiocheck"
                                       id="radio-<?php echo $each["id"]; ?>"
                                       name="OrderDetail[options][<?php echo $key; ?>]"
                                       value="<?php echo $each["id"] . '|' . $each["name"]; ?>">
                                <label for="radio-<?php echo $each["id"]; ?>"><?php echo $each["name"]; ?></label>
                            </li>
                            <?php
                        }
                        echo "</ul>";
                    }
                }
                ?>
                <span class="text_note">Chọn số lượng</span>

                <div class="bg_detail">
                    <div class="detail_listcart" style="height: 185px">
                        <table cellspacing="0" cellpadding="0" border="0" class="shopping_cart_detail" id="tblListSkus">
                            <tbody>
                            <?php
                            if (count($product['ProductSubitem']) > 0) {
                                $hidden = '';
                                ?>

                                <?php
                                foreach ($product['ProductSubitem'] as $item) {
                                    $name = !empty($item['name']) ? $item['name'] : $product['Product']['name'];
                                    $imglist = json_decode($item['medias']);
                                    $image = !empty($imglist[0]) ? $product['Media'][$imglist[0]]['file'] : '';
                                    ?>
                                    <tr class="">
                                        <td width="78" class="left_col" data-abc="">
                                            <a href="javascript:;" onclick="">
                                                <?php echo $this->Media->image($image, 45, 45, array('class' => '', 'disable_size' => true)); ?>
                                            </a>
                                        </td>
                                        <td width="" class="name_book">
                                            <a href="javascript:;"><?php echo $name; ?></a>
                                        </td>
                                        <td width="75" class="bg_price">
                                            <select class="select_number" name="qty[<?php echo $item['id']; ?>]">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                <?php
                            } else {
                                $hidden = 'hidden';
                                ?>

                                <tr class="">
                                    <td width="78" class="left_col" data-abc="">
                                        <a href="javascript:;" onclick="">
                                            <?php echo $this->Media->image($product['Thumb']['file'], 45, 45, array('class' => '', 'disable_size' => true)); ?>
                                        </a>
                                    </td>
                                    <td width="" class="name_book">
                                        <a href="javascript:;"><?php echo $product['Product']['name']; ?></a>
                                    </td>
                                    <td width="75" class="bg_price">
                                        <select class="select_number" name="OrderDetail[qty]">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <a class="view_full <?php echo $hidden; ?>" onclick="viewmore()" title="Xem thêm lựa chọn khác"
                       style=""><span class="open"></span></a>
                </div>
                <div class="form-in">
                    <a href="javascript:;" class="buy">Mua</a>
                    <a href="javascript:;" class="add-cart">Cho vào giỏ</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
        <div class="clearfix"></div>
    </div>
</article>
<!----- tabs-box ---->
<article class="row">
    <div class="col-md-10">
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Thông tin sản phẩm</span>
                    </li>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="fb-comments"
                     data-href="<?php echo $this->Html->url($this->request->here, true); ?>"
                     data-numposts="15" data-colorscheme="light">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="row random">
            <h3 class="title">
                Sản phẩm liên quan
            </h3>
            <div class="row" id="relative-2">
            </div>
    </div>
</article>

