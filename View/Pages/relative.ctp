<?php
foreach ($products as $p) {
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
            <?php echo $this->Media->image($p['Thumb']['file'], 300, 415, array('class' => 'img-responsive pic-in', 'disable_size' => true), true); ?>
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
                            if (!empty($providers[$p['Product']['provider_id']]['thumb'])) {
                                echo $this->Html->image(
                                    Configure::read('Img.path')
                                    . $providers[$p['Product']['provider_id']]['thumb'],
                                    array('height' => '35')
                                );
                            } else
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
<?php } ?>
