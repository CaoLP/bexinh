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
                        <img src="<?php echo Configure::read('Img.path') . $media['file']; ?>" class="etalage_thumb_image img-responsive">
                        <img src="<?php echo Configure::read('Img.path') . $media['file']; ?>" class="etalage_thumb_image img-responsive">
                    </li>
                <?php } ?>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <div class="span1_of_1_des">
            <div class="desc1">
                <h3>Lorem Ipsum is simply dummy text </h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                <h5>Rs. 399 <a href="#">click for offer</a></h5>
                <div class="available">
                    <h4>Available Options :</h4>
                    <ul>
                        <li>Size:
                            <select>
                                <option>L</option>
                                <option>XL</option>
                                <option>S</option>
                                <option>M</option>
                            </select>
                        </li>
                        <li>Quality:
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </li>
                    </ul>
                    <div class="form-in">
                        <a href="#">Add To Cart</a>
                    </div>
                    <span class="span_right"><a href="#">login to save in wishlist </a></span>
                    <div class="clearfix"></div>
                </div>
                <div class="share-desc">
                    <div class="share">
                        <h4>Share Product :</h4>
                        <ul class="share_nav">
                            <li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
                            <li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
                            <li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
                            <li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>