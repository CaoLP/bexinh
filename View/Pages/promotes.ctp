<div id="p-content">
    <div class="panel in-line">
        <div class="panel-heading para-an has-icon">
            <h3>KHUYẾN MÃI</h3>
        </div>

        <div class="panel-body lady-in">
            <?php foreach ($promotes as $key=>$promote): ?>
                <div class="col-md-12">
                    <div class="thumbnail">
                        <a href="<?php echo $this->Html->url(array(
                            'controller' => 'pages',
                            'action' => 'promotes',
                            $promote['Promote']['id']
                        ))?>">
                            <?php echo $this->Media->image($promote['Thumb']['file'], 900, 334, array('class' => 'img-responsive')); ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>