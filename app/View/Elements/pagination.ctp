<?php if($pagination != "hide"){ ?>
    <div class="span12" id="paginate">
    <div class="pagination pagination-right">
        <ul>
            <?php   if($this_page == 1){ 
                            echo "<li class='disabled'>";
                            echo $this->Html->link('Prev','',array('onclick'=>'return false'));}
                    else{   echo "<li>";
                            echo $this->Html->link('Prev','',array('onclick'=>'return false','id'=>'page_switch')); }
                    echo "</li>";
            ?>
            <?php   if($pagination == 'end'){ 
                        echo "<li class='disabled'>";
                        echo $this->Html->link('Next','',array('onclick'=>'return false'));}
                    else{   echo "<li>";
                            echo $this->Html->link('Next','',array('onclick'=>'return false','id'=>'page_switch')); }
                    echo "</li>";
            ?>
        </ul>
    </div>
    </div>
<?php } ?>