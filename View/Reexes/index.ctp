
<div class="panel-heading">
    <h3 class="panel-title">
		<a href="javascript:void(0);" class="toggle-sidebar">
			<span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
		<?php echo __('Reexes'); ?>	</h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
			<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Reex'), array('action' => 'add'), array('escape' => false)); ?></li>
					<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		</ul>
    </div>
 <div class="col-md-12">
	<?php echo $this->Session->flash(); ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('number'); ?></th>
						<th><?php echo $this->Paginator->sort('type'); ?></th>
						<th><?php echo $this->Paginator->sort('store_id'); ?></th>
						<th><?php echo $this->Paginator->sort('total'); ?></th>
						<th><?php echo $this->Paginator->sort('person_one'); ?></th>
						<th><?php echo $this->Paginator->sort('person_two'); ?></th>
						<th><?php echo $this->Paginator->sort('company'); ?></th>
						<th><?php echo $this->Paginator->sort('note'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('created_by'); ?></th>
						<th><?php echo $this->Paginator->sort('updated'); ?></th>
						<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
						<th><?php echo $this->Paginator->sort('created_date'); ?></th>
						<th><?php echo $this->Paginator->sort('cause'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($reexes as $reex): ?>
					<tr>
						<td><?php echo h($reex['Reex']['id']); ?>&nbsp;</td>
						<td><?php echo h($reex['Reex']['number']); ?>&nbsp;</td>
						<td><?php echo h($reex['Reex']['type']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($reex['Store']['name'], array('controller' => 'stores', 'action' => 'view', $reex['Store']['id'])); ?>
		</td>
						<td><?php echo h($reex['Reex']['total']); ?>&nbsp;</td>
						<td><?php echo h($reex['Reex']['person_one']); ?>&nbsp;</td>
						<td><?php echo h($reex['Reex']['person_two']); ?>&nbsp;</td>
						<td><?php echo h($reex['Reex']['company']); ?>&nbsp;</td>
						<td><?php echo h($reex['Reex']['note']); ?>&nbsp;</td>
						<td><?php echo h($reex['Reex']['created']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($reex['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $reex['TrackableCreator']['id'])); ?>
		</td>
						<td><?php echo h($reex['Reex']['updated']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($reex['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $reex['TrackableUpdater']['id'])); ?>
		</td>
						<td><?php echo h($reex['Reex']['created_date']); ?>&nbsp;</td>
						<td><?php echo h($reex['Reex']['cause']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $reex['Reex']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $reex['Reex']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $reex['Reex']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $reex['Reex']['id'])); ?>
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

