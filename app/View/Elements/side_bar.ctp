<div class="span3">
    <div class="well span9 offset3" id="search_well">
        <form id="criteria_filter" method="Post" action="#" >
        <?php   foreach ($sidebar_data as $key=>$values){    ?>
            <h5><label class="search_label"><?php echo $key; ?></label></h5>
            <select class="span12 criteria_filter" id="<?php echo 'search_'.$key; ?>" name="<?php echo $key; ?>[]" multiple="multiple" >
                <!--<option> - none - </option>-->
                <?php foreach ($values as $value) {  ?>
                <option value="<?php echo $value; ?>"> <?php echo $value;?> </option>
                <?php } ?>
            </select>
        <?php } ?>
            <div class="row-fluid" id="action_buttons">
                <button type="reset" class="btn span6" id="sidebar_reset">Reset</button>
                <button type="submit" class="btn span6 btn-primary" id="sidebar_filter">Filter</button>
            </div>
        </form>
    </div>
</div>