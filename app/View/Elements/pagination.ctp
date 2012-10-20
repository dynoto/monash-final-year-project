<?php if(($paginate_data['hide'] != true) and isset($paginate_data['hide'])){ ?>
    <div class="span12" id="paginate">
    <div class="pagination pagination-right">
        <ul>
            <?php
                    if($paginate_data['page'] == 1){ 
                            echo "<li class='disabled'>";
                            echo $this->Html->link('Prev','',array('onclick'=>'return false'));}
                    else{   echo "<li>";
                            echo $this->Html->link('Prev','',array('onclick'=>'return false','id'=>'page_switch')); }
                    echo "</li>";
            ?>
            <?php   if($paginate_data['last'] == true){ 
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