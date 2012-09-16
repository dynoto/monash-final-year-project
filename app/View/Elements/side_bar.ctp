<div class="span3">
    <div class="well span9 offset3" id="search_well">
        <form id="criteria_filter" method="Post" action="#" >
        <?php   foreach ($sidebar_data as $data){    ?>
            <h5><label class="search_label"><?php echo $data['name']; ?></label></h5>
            <select class="span12 criteria_filter" id="<?php echo 'search_'.$data['name']; ?>" name="<?php echo $data['name']; ?>[]" multiple="multiple" >
                <?php print_r($data['values']); ?>
                <?php foreach ($data['values'] as $key=>$value) {  ?>
                <option value="<?php echo $key; ?>"> <?php echo $value;?> </option>
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