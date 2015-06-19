<?php
foreach ($promotes as $key => $promote) {
    if ($key == 0) {
      ?>
        <div class="in-left">
            <?php echo $this->Media->image($promote['Thumb']['file'], 425, 425, array('class'=>'img-responsive pic-in','disable_size'=>true)); ?>
            <p class="code"><?php echo $promote['Promote']['name']; ?></p>
            <div class="cool">
                <div class="promote">
                    <?php echo $promote['Promote']['excert']; ?>
                    <span class="value"><?php echo $promote['Promote']['value'];?>*<label>%</label></span>
                    <small>off</small>
                </div>
            </div>
        </div>
    <?php
    } else{
    ?>
        <div class="discount">
        <a href="<?php echo $this->Html->url(array(
            'controller' => 'pages',
            'action' => 'promotes',
            $promote['Promote']['id']
        ))?>">
    <?php echo $this->Media->image($promote['Thumb']['file'], 322, 173, array('class'=>'img-responsive pic-in','disable_size'=>true)); ?>
        </a>
            <p class="no-more"><?php echo $promote['Promote']['name']; ?></p>
        <a href="<?php echo $this->Html->url(array(
            'controller' => 'pages',
            'action' => 'promotes',
            $promote['Promote']['id']
        ))?>" class="know-more">Xem thêm</a>
        </div>
    <?php
}
}
?>
    <div class="twitter-in">
        <h5>TWITTER  UPDATES</h5>
        <span class="twitter-ic">	</span>
        <div class="up-date">
            <p>@suniljoshi Looks like nice and dicent design</p>
            <a href="#">http://bit.ly/sun</a>
            <p class="ago">About 1 hour ago via twitterfeed</p>
        </div>
        <div class="up-date">
            <p>@suniljoshi Looks like nice and dicent design</p>
            <a href="#">http://bit.ly/sun</a>
            <p class="ago">About 1 hour ago via twitterfeed</p>
        </div>
        <a href="#" class="tweets">More Tweets</a>
        <div class="clearfix"> </div>
    </div>
