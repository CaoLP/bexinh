<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin Menu'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Admin Menu'), array('action' => 'edit', $adminMenu['AdminMenu']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Admin Menu'), array('action' => 'delete', $adminMenu['AdminMenu']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $adminMenu['AdminMenu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Admin Menus'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Admin Menu'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Admin Menus'), array('controller' => 'admin_menus', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Parent Admin Menu'), array('controller' => 'admin_menus', 'action' => 'add'), array('escape' => false)); ?> </li>

        </ul>
    </div>
    <div class="col-md-12">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
            <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($adminMenu['AdminMenu']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($adminMenu['AdminMenu']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Icon'); ?></th>
		<td>
			<?php echo h($adminMenu['AdminMenu']['icon']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Url'); ?></th>
		<td>
			<?php echo h($adminMenu['AdminMenu']['url']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Parent Admin Menu'); ?></th>
		<td>
			<?php echo $this->Html->link($adminMenu['ParentAdminMenu']['name'], array('controller' => 'admin_menus', 'action' => 'view', $adminMenu['ParentAdminMenu']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lft'); ?></th>
		<td>
			<?php echo h($adminMenu['AdminMenu']['lft']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rght'); ?></th>
		<td>
			<?php echo h($adminMenu['AdminMenu']['rght']); ?>
			&nbsp;
		</td>
</tr>
            </tbody>
        </table>

    </div>

            <div class="related row">
            <div class="col-md-12">
                <h3><?php echo __('Related Admin Menus'); ?></h3>
                <?php if (!empty($adminMenu['ChildAdminMenu'])): ?>
                <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                    <thead>
                    <tr>
                        		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Icon'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Group Ids'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
                        <th class="actions"></th>
                    </tr>
                    <thead>
                    <tbody>
                    	<?php foreach ($adminMenu['ChildAdminMenu'] as $childAdminMenu): ?>
		<tr>
			<td><?php echo $childAdminMenu['id']; ?></td>
			<td><?php echo $childAdminMenu['name']; ?></td>
			<td><?php echo $childAdminMenu['icon']; ?></td>
			<td><?php echo $childAdminMenu['url']; ?></td>
			<td><?php echo $childAdminMenu['group_ids']; ?></td>
			<td><?php echo $childAdminMenu['parent_id']; ?></td>
			<td><?php echo $childAdminMenu['lft']; ?></td>
			<td><?php echo $childAdminMenu['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'admin_menus', 'action' => 'view', $childAdminMenu['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'admin_menus', 'action' => 'edit', $childAdminMenu['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'admin_menus', 'action' => 'delete', $childAdminMenu['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $childAdminMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>

                <div class="actions">
                    <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Child Admin Menu'), array('controller' => 'admin_menus', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>                </div>
            </div><!-- end col md 12 -->
        </div>
    
</div>

