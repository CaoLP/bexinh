<html>
<head></head>
<body>
<div id="slide_top">
    <div id="carousel-example-generic" class="carousel slide banner_home_big" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            foreach ($slides['slide_top'] as $key => $slide) {
                if ($key == 0) {
                    $class = "active";
                } else {
                    $class = "";
                }

                echo "<li data-target=\"#carousel-example-generic\" data-slide-to=\"{$key}\" class=\"{$class}\"></li>";
            }
            ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            foreach ($slides['slide_top'] as $key => $slide) {
                if ($key == 0) {
                    $class = "active";
                } else {
                    $class = "";
                }
                ?>
                <div class="item <?php echo $class; ?>">
                    <a href="<?php echo $slide['Setting']['data'] ?>">
                        <?php echo $this->Media->image($slide['Thumb']['file'], 745, 256, array ()); ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div id="slide_left">
    <div id="carousel-1" class="carousel slide banner_home_big" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            foreach ($slides['slide_left'] as $key => $slide) {
                if ($key == 0) {
                    $class = "active";
                } else {
                    $class = "";
                }

                echo "<li data-target=\"#carousel-1\" data-slide-to=\"{$key}\" class=\"{$class}\"></li>";
            }
            ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            foreach ($slides['slide_left'] as $key => $slide) {
                if ($key == 0) {
                    $class = "active";
                } else {
                    $class = "";
                }
                ?>
                <div class="item <?php echo $class; ?>">
                    <a href="<?php echo $slide['Setting']['data'] ?>">
                        <?php echo $this->Media->image($slide['Thumb']['file'], 313, 154, array ()); ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div id="slide_mid">
    <div id="carousel-2" class="carousel slide banner_home_big" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            foreach ($slides['slide_mid'] as $key => $slide) {
                if ($key == 0) {
                    $class = "active";
                } else {
                    $class = "";
                }

                echo "<li data-target=\"#carousel-2\" data-slide-to=\"{$key}\" class=\"{$class}\"></li>";
            }
            ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            foreach ($slides['slide_mid'] as $key => $slide) {
                if ($key == 0) {
                    $class = "active";
                } else {
                    $class = "";
                }
                ?>
                <div class="item <?php echo $class; ?>">
                    <a href="<?php echo $slide['Setting']['data'] ?>">
                        <?php echo $this->Media->image($slide['Thumb']['file'], 313, 154, array ()); ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <a class="left carousel-control" href="#carousel-2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div id="slide_right">
    <div id="carousel-3" class="carousel slide banner_home_big" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            foreach ($slides['slide_right'] as $key => $slide) {
                if ($key == 0) {
                    $class = "active";
                } else {
                    $class = "";
                }
                echo "<li data-target=\"#carousel-3\" data-slide-to=\"{$key}\" class=\"{$class}\"></li>";
            }
            ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            foreach ($slides['slide_right'] as $key => $slide) {
                if ($key == 0) {
                    $class = "active";
                } else {
                    $class = "";
                }
                ?>
                <div class="item <?php echo $class; ?>">
                    <a href="<?php echo $slide['Setting']['data'] ?>">
                        <?php echo $this->Media->image($slide['Thumb']['file'], 313, 154, array ()); ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <a class="left carousel-control" href="#carousel-3" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-3" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</body>
</html>