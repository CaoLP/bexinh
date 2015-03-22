
<div class="panel-heading">
    <h3 class="panel-title">
		<a href="javascript:void(0);" class="toggle-sidebar">
			<span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
		<?php echo __('Inout Warehouses'); ?>	</h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
			<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Inout Warehouse'), array('action' => 'add'), array('escape' => false)); ?></li>
					<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Inout Warehouse Details'), array('controller' => 'inout_warehouse_details', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Inout Warehouse Detail'), array('controller' => 'inout_warehouse_details', 'action' => 'add'), array('escape' => false)); ?> </li>
		</ul>
    </div>
 <div class="col-md-12">
	<?php echo $this->Session->flash(); ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('note'); ?></th>
						<th><?php echo $this->Paginator->sort('receive_note'); ?></th>
						<th><?php echo $this->Paginator->sort('store_id'); ?></th>
						<th><?php echo $this->Paginator->sort('total'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('created_by'); ?></th>
						<th><?php echo $this->Paginator->sort('updated'); ?></th>
						<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($inoutWarehouses as $inoutWarehouse): ?>
					<tr>
						<td><?php echo h($inoutWarehouse['InoutWarehouse']['id']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouse['InoutWarehouse']['note']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouse['InoutWarehouse']['receive_note']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($inoutWarehouse['Store']['name'], array('controller' => 'stores', 'action' => 'view', $inoutWarehouse['Store']['id'])); ?>
		</td>
						<td><?php echo h($inoutWarehouse['InoutWarehouse']['total']); ?>&nbsp;</td>
						<td><?php echo h($inoutWarehouse['InoutWarehouse']['created']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($inoutWarehouse['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $inoutWarehouse['TrackableCreator']['id'])); ?>
		</td>
						<td><?php echo h($inoutWarehouse['InoutWarehouse']['updated']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($inoutWarehouse['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $inoutWarehouse['TrackableUpdater']['id'])); ?>
		</td>
						<td><?php echo h($inoutWarehouse['InoutWarehouse']['status']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $inoutWarehouse['InoutWarehouse']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $inoutWarehouse['InoutWarehouse']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $inoutWarehouse['InoutWarehouse']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $inoutWarehouse['InoutWarehouse']['id'])); ?>
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

