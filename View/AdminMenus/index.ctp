<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin Menus'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Admin Menu'), array('action' => 'add'), array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>'.__('List Admin Menus'), array('controller' => 'admin_menus', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Parent Admin Menu'), array('controller' => 'admin_menus', 'action' => 'add'), array('escape' => false)); ?> </li>
        </ul>
    </div>
    <div class="col-md-12">
        <?php echo $this->Session->flash(); ?>
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Icon</th>
                <th>Url</th>
                <th>Parent</th>
                <th>lft</th>
                <th>rght</th>
                <th class="actions"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($adminMenus as $adminMenu): ?>
                <tr>
                    <td><?php echo h($adminMenu['AdminMenu']['name']); ?>&nbsp;</td>
                    <td><?php echo h($adminMenu['AdminMenu']['icon']); ?>&nbsp;</td>
                    <td><?php echo h($adminMenu['AdminMenu']['url']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($adminMenu['ParentAdminMenu']['name'], array('controller' => 'admin_menus', 'action' => 'view', $adminMenu['ParentAdminMenu']['id'])); ?>
                    </td>
                    <td><?php echo h($adminMenu['AdminMenu']['lft']); ?>&nbsp;</td>
                    <td><?php echo h($adminMenu['AdminMenu']['rght']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $adminMenu['AdminMenu']['id']), array('escape' => false)); ?>
                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $adminMenu['AdminMenu']['id']), array('escape' => false)); ?>
                        <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $adminMenu['AdminMenu']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $adminMenu['AdminMenu']['id'])); ?>
                    </td>
                </tr>
                <?php
                $this->Menu->loopChildMenu($adminMenu['ChildAdminMenu'],$adminMenu['AdminMenu']['name']);
                ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

