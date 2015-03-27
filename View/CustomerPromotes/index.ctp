
<div class="panel-heading">
    <h3 class="panel-title">
		<a href="javascript:void(0);" class="toggle-sidebar">
			<span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
		<?php echo __('Customer Promotes'); ?>	</h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
			<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Customer Promote'), array('action' => 'add'), array('escape' => false)); ?></li>
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Promotes'), array('controller' => 'promotes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Promote'), array('controller' => 'promotes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		</ul>
    </div>
 <div class="col-md-12">
	<?php echo $this->Session->flash(); ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
						<th><?php echo $this->Paginator->sort('promote_id'); ?></th>
						<th><?php echo $this->Paginator->sort('promote_code'); ?></th>
						<th><?php echo $this->Paginator->sort('used'); ?></th>
						<th><?php echo $this->Paginator->sort('store_id'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('created_by'); ?></th>
						<th><?php echo $this->Paginator->sort('updated'); ?></th>
						<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($customerPromotes as $customerPromote): ?>
					<tr>
						<td><?php echo h($customerPromote['CustomerPromote']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($customerPromote['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $customerPromote['Customer']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($customerPromote['Promote']['name'], array('controller' => 'promotes', 'action' => 'view', $customerPromote['Promote']['id'])); ?>
		</td>
						<td><?php echo h($customerPromote['CustomerPromote']['promote_code']); ?>&nbsp;</td>
						<td><?php echo h($customerPromote['CustomerPromote']['used']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($customerPromote['Store']['name'], array('controller' => 'stores', 'action' => 'view', $customerPromote['Store']['id'])); ?>
		</td>
						<td><?php echo h($customerPromote['CustomerPromote']['created']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($customerPromote['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $customerPromote['TrackableCreator']['id'])); ?>
		</td>
						<td><?php echo h($customerPromote['CustomerPromote']['updated']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($customerPromote['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $customerPromote['TrackableUpdater']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $customerPromote['CustomerPromote']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $customerPromote['CustomerPromote']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $customerPromote['CustomerPromote']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customerPromote['CustomerPromote']['id'])); ?>
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

