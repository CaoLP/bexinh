<div class="panel panel-default">
    <div class="panel-heading"><?php echo __('Options') ?></div>
    <div class="panel-body">
        <?php foreach ($product_options as $key => $opt_gr) {
            ?>
            <h4><?php echo $key ?></h4>
            <?php
            foreach ($opt_gr as $s_key => $opt) {
                ?>
                <div class="list-option">
                    <div class="radio">
                        <input type="radio"  name="data[WarehouseOption][<?php echo $opt['Option']['option_group_id']?>][]"
                            <?php if(!empty($opt['Option']['parent_id'])) echo ' disabled="true" class="parent-'.$opt['Option']['parent_id'].'" ';
                            else echo ' class="option-checkbox" '
                            ?>
                               id="flat-radio-<?php echo $s_key; ?>" value="<?php echo $s_key; ?>">
                        <label for="flat-radio-<?php echo $s_key; ?>"><?php echo $opt['Option']['name'] ?></label>
                    </div>
                </div>
            <?php
            }
        } ?>
    </div>
</div>