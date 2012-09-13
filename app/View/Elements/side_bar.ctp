<div class="span3">
    <div class="well span9 offset3" id="search_well">
        <form>
        <?php   foreach ($data_output as $key=>$values){    ?>
            <h5><label class="search_label"><?php echo $key; ?></label></h5>
            <select class="span12" id=<?php echo 'search_'.$key; ?> >
                <option> - none -</option>
                <?php foreach ($values as $value) {  ?>
                <option> <?php echo $value;?> </option>
                <?php } ?>
            </select>
        <?php } ?>
            <div class="row-fluid">
                <button type="reset" class="btn span6" id="sidebar_reset">Reset</button>
                <button type="button" class="btn span6 btn-primary" id="sidebar_filter">Filter</button>
            </div>
        </form>
    </div>
</div>