<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Option'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <ul class="nav nav-pills nav-justified">
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>' . __('Edit Option'), array('action' => 'edit', $option['Option']['id']), array('escape' => false)); ?> </li>
            <li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>' . __('Delete Option'), array('action' => 'delete', $option['Option']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $option['Option']['id'])); ?> </li>
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>' . __('List Options'), array('action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>' . __('New Option'), array('action' => 'add'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>' . __('List Option Groups'), array('controller' => 'option_groups', 'action' => 'index'), array('escape' => false)); ?> </li>
            <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>' . __('New Option Group'), array('controller' => 'option_groups', 'action' => 'add'), array('escape' => false)); ?> </li>

        </ul>
    </div>
    <div class="col-md-12">
        <table cellpadding="0" cellspacing="0" class="table table-striped">
            <tbody>
            <tr>
                <th><?php echo __('Id'); ?></th>
                <td>
                    <?php echo h($option['Option']['id']); ?>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <th><?php echo __('Name'); ?></th>
                <td>
                    <?php echo h($option['Option']['name']); ?>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <th><?php echo __('Option Group'); ?></th>
                <td>
                    <?php echo $this->Html->link($option['OptionGroup']['name'], array('controller' => 'option_groups', 'action' => 'view', $option['OptionGroup']['id'])); ?>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <th><?php echo __('Category'); ?></th>
                <td>
                    <?php echo $this->Html->link($option['Category']['name'], array('controller' => 'categories', 'action' => 'view', $option['Category']['id'])); ?>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <th><?php echo __('Parent name'); ?></th>
                <td>
                    <?php echo $this->Html->link($option['ParentOption']['name'], array('controller' => 'options', 'action' => 'view', $option['ParentOption']['id'])); ?>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <th><?php echo __('Other'); ?></th>
                <td>
                    <?php echo h($option['Option']['other']); ?>
                    &nbsp;
                </td>
            </tr>
            </tbody>
        </table>

    </div>


</div>

