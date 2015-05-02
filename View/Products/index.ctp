<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Products'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>' . __('New Product'), array('action' => 'add'), array('escape' => false)); ?></li>
        </ul>
    </div>
    <div class="col-md-12">
        <?php echo $this->Session->flash(); ?>
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <thead>
            <tr>
                <th></th>
                <th><?php echo $this->Paginator->sort('sku'); ?></th>
                <th><?php echo $this->Paginator->sort('provider_id'); ?></th>
                <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('slug'); ?></th>
                <th><?php echo $this->Paginator->sort('price'); ?></th>
                <th><?php echo $this->Paginator->sort('retail_price'); ?></th>
                <th><?php echo $this->Paginator->sort('source_price'); ?></th>
                <th><?php echo $this->Paginator->sort('status'); ?></th>
                <th class="actions"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php
                        if ($product['Thumb']['file'])
                            echo $this->Media->image($product['Thumb']['file'], 50, 50, array('class' => 'thumbnail'));
                        ?>&nbsp;</td>
                    <td><?php echo h($product['Product']['sku']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($product['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $product['Provider']['id'])); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
                    </td>
                    <td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
                    <td><?php echo h($product['Product']['slug']); ?>&nbsp;</td>
                    <td class="currency"><?php echo $this->App->format_money(h($product['Product']['price'])); ?>&nbsp;</td>
                    <td class="currency"><?php echo $this->App->format_money(h($product['Product']['retail_price'])); ?>&nbsp;</td>
                    <td class="currency"><?php echo $this->App->format_money(h($product['Product']['source_price'])); ?>&nbsp;</td>
                    <td><?php echo h($product['Product']['status']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $product['Product']['id']), array('escape' => false)); ?>
                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $product['Product']['id']), array('escape' => false)); ?>
                        <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $product['Product']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <p>
            <small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?></small>
        </p>

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
    </div>
</div>

