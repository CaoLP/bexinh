<ul class="list-group panel">
    <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b><?php echo __('Action')?></b></li>
    <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
    <?php
    $this->Menu->createMenu($menu);
    ?>
</ul>