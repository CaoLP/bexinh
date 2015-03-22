<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Inout Warehouse'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Inout Warehouse'), array('action' => 'edit', $inoutWarehouse['InoutWarehouse']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Inout Warehouse'), array('action' => 'delete', $inoutWarehouse['InoutWarehouse']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $inoutWarehouse['InoutWarehouse']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Inout Warehouses'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Inout Warehouse'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Inout Warehouse Details'), array('controller' => 'inout_warehouse_details', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Inout Warehouse Detail'), array('controller' => 'inout_warehouse_details', 'action' => 'add'), array('escape' => false)); ?> </li>

        </ul>
    </div>
    <div class="col-md-12">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
            <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($inoutWarehouse['InoutWarehouse']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Note'); ?></th>
		<td>
			<?php echo h($inoutWarehouse['InoutWarehouse']['note']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Receive Note'); ?></th>
		<td>
			<?php echo h($inoutWarehouse['InoutWarehouse']['receive_note']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Store'); ?></th>
		<td>
			<?php echo $this->Html->link($inoutWarehouse['Store']['name'], array('controller' => 'stores', 'action' => 'view', $inoutWarehouse['Store']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total'); ?></th>
		<td>
			<?php echo h($inoutWarehouse['InoutWarehouse']['total']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($inoutWarehouse['InoutWarehouse']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Creator'); ?></th>
		<td>
			<?php echo $this->Html->link($inoutWarehouse['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $inoutWarehouse['TrackableCreator']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($inoutWarehouse['InoutWarehouse']['updated']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Updater'); ?></th>
		<td>
			<?php echo $this->Html->link($inoutWarehouse['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $inoutWarehouse['TrackableUpdater']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($inoutWarehouse['InoutWarehouse']['status']); ?>
			&nbsp;
		</td>
</tr>
            </tbody>
        </table>

    </div>

            <div class="related row">
            <div class="col-md-12">
                <h3><?php echo __('Related Inout Warehouse Details'); ?></h3>
                <?php if (!empty($inoutWarehouse['InoutWarehouseDetail'])): ?>
                <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                    <thead>
                    <tr>
                        		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inout Warehouse Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Sku'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Tax'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Options'); ?></th>
		<th><?php echo __('Option Names'); ?></th>
		<th><?php echo __('Name'); ?></th>
                        <th class="actions"></th>
                    </tr>
                    <thead>
                    <tbody>
                    	<?php foreach ($inoutWarehouse['InoutWarehouseDetail'] as $inoutWarehouseDetail): ?>
		<tr>
			<td><?php echo $inoutWarehouseDetail['id']; ?></td>
			<td><?php echo $inoutWarehouseDetail['inout_warehouse_id']; ?></td>
			<td><?php echo $inoutWarehouseDetail['product_id']; ?></td>
			<td><?php echo $inoutWarehouseDetail['sku']; ?></td>
			<td><?php echo $inoutWarehouseDetail['qty']; ?></td>
			<td><?php echo $inoutWarehouseDetail['price']; ?></td>
			<td><?php echo $inoutWarehouseDetail['tax']; ?></td>
			<td><?php echo $inoutWarehouseDetail['total']; ?></td>
			<td><?php echo $inoutWarehouseDetail['options']; ?></td>
			<td><?php echo $inoutWarehouseDetail['option_names']; ?></td>
			<td><?php echo $inoutWarehouseDetail['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'inout_warehouse_details', 'action' => 'view', $inoutWarehouseDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'inout_warehouse_details', 'action' => 'edit', $inoutWarehouseDetail['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'inout_warehouse_details', 'action' => 'delete', $inoutWarehouseDetail['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $inoutWarehouseDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>

                <div class="actions">
                    <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Inout Warehouse Detail'), array('controller' => 'inout_warehouse_details', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>                </div>
            </div><!-- end col md 12 -->
        </div>
    
</div>

