$(document).ready(function(){
    $('select.criteria_filter').dropdownchecklist();
    
    $('a#page_switch').click(function(){
       var page_filter = parseInt($('input#page_filter').val());
       if($(this).text() == 'Next'){
           page_filter += 1;
       }else if($(this).text() == 'Prev'){
           page_filter -= 1;
       }
       page_filter = $('form#criteria_filter').attr('action')+'/'+page_filter;
       $('form#hidden_criteria_filter').attr('action',page_filter);
       $('form#hidden_criteria_filter').submit();
    });
    
    $('button#sidebar_reset').click(function(){
        $('form#criteria_filter').children('select.criteria_filter').children('option').prop("checked",false);
        $('span.ui-dropdownchecklist-text').text("");
        $('[id^=ddcl-]').attr('checked',false);
    })
});