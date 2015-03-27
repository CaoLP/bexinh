<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Reex'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>'.__('Edit Reex'), array('action' => 'edit', $reex['Reex']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>'.__('Delete Reex'), array('action' => 'delete', $reex['Reex']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $reex['Reex']['id'])); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Reexes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Reex'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Stores'), array('controller' => 'stores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Store'), array('controller' => 'stores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Trackable Creator'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>

        </ul>
    </div>
    <div class="col-md-12">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
            <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($reex['Reex']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Number'); ?></th>
		<td>
			<?php echo h($reex['Reex']['number']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Type'); ?></th>
		<td>
			<?php echo h($reex['Reex']['type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Store'); ?></th>
		<td>
			<?php echo $this->Html->link($reex['Store']['name'], array('controller' => 'stores', 'action' => 'view', $reex['Store']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total'); ?></th>
		<td>
			<?php echo h($reex['Reex']['total']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Person One'); ?></th>
		<td>
			<?php echo h($reex['Reex']['person_one']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Person Two'); ?></th>
		<td>
			<?php echo h($reex['Reex']['person_two']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Company'); ?></th>
		<td>
			<?php echo h($reex['Reex']['company']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Note'); ?></th>
		<td>
			<?php echo h($reex['Reex']['note']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($reex['Reex']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Creator'); ?></th>
		<td>
			<?php echo $this->Html->link($reex['TrackableCreator']['name'], array('controller' => 'users', 'action' => 'view', $reex['TrackableCreator']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($reex['Reex']['updated']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Trackable Updater'); ?></th>
		<td>
			<?php echo $this->Html->link($reex['TrackableUpdater']['name'], array('controller' => 'users', 'action' => 'view', $reex['TrackableUpdater']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created Date'); ?></th>
		<td>
			<?php echo h($reex['Reex']['created_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cause'); ?></th>
		<td>
			<?php echo h($reex['Reex']['cause']); ?>
			&nbsp;
		</td>
</tr>
            </tbody>
        </table>

    </div>

    
</div>

