<?php
if(isset($promotes))
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

    }
}
?>
