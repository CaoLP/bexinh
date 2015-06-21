<?php if (isset($categories) && count($categories) > 0) { ?>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-cat">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse navbar-collapse-cat collapse ">
            <!-- Left nav -->
            <ul class="nav nav-pills navbar-nav navbar-center">
                <li><a href="<?php echo $this->Html->url('/')?>">Trang chủ</a></li>
               <?php echo $this->Menu->loadCategory($categories, 'Category','children', false);?>
                <li><a href="<?php echo $this->Html->url('/help')?>">Hướng dẫn mua hàng</a></li>
                <li><a href="<?php echo $this->Html->url('/contact')?>">Liên hệ</a></li>
            </ul>
        </div>
<?php } ?>
<!-- Static navbar -->
