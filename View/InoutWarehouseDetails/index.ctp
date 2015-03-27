
<div class="panel-heading">
    <h3 class="panel-title">
		<a href="javascript:void(0);" class="toggle-sidebar">
			<span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
		<?php echo __('Inout Warehouse Details'); ?>	</h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
			<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Inout Warehouse Detail'), array('action' => 'add'), array('escape' => false)); ?></li>
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Inout Warehouses'), array('controller' => 'inout_warehouses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Inout Warehouse'), array('controller' => 'inout_warehouses', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Products'), array('controller' => 'products', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Product'), array('controller' => 'products', 'action' => 'add'), array('escape' => false)); ?> </li>
		</ul>
    </div>
 <div class="col-md-12">
	<?php echo $this->Session->flash(); ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('inout_warehouse_id'); ?></th>
						<th><?php echo $this->Paginator->sort('product_id'); ?></th>
						<th><?php echo $this->Paginator->sort('sku'); ?></th>
						<th><?php echo $this->Paginator->sort('qty'); ?></th>
						<th><?php echo $this->Paginator->sort('price'); ?></th>
						<th><?php echo $this->Paginator->sort('tax'); ?></th>
						<th><?php echo $this->Paginator->sort('total'); ?></th>
						<th><?php echo $this->Paginator->sort('options'); ?></th>
						<th><?php echo $this->Paginator->sort('option_names'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($inoutWarehouseDetails as $inoutWarehouseDetail): ?>
					<tr>
						<td><?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($inoutWarehouseDetail['InoutWarehouse']['id'], array('controller' => 'inout_warehouses', 'action' => 'view', $inoutWarehouseDetail['InoutWarehouse']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($inoutWarehouseDetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $inoutWarehouseDetail['Product']['id'])); ?>
		</td>
						<td><?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['sku']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['qty']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['price']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['tax']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['total']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['options']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['option_names']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouseDetail['InoutWarehouseDetail']['name']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $inoutWarehouseDetail['InoutWarehouseDetail']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $inoutWarehouseDetail['InoutWarehouseDetail']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $inoutWarehouseDetail['InoutWarehouseDetail']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $inoutWarehouseDetail['InoutWarehouseDetail']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>
    </div>
</div>

