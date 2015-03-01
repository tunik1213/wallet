function info_alert(text){
    $.jGrowl(text, { 
        theme: 'Left', 
        appendTo: 'h1',
        life:5000
    });
}
function open_form(){
    var a=$('a#add-account-button');
    
    $('div.add-account-form').show(500)
           .find('input#name').focus();
    $(a).find('span.enter-key').show();
    $(a).addClass('form-active');
}
function add_account(){
    var a=$('a#add-account-button');
    var accName = $('input#name').val();
    
    $.ajax({
        url: "/index.php/ajax/addAccount",
        type: "POST",
        cache: false,
        dataType: "json",
        data: {name: accName}
    }).done( function ( result ) {
        if (result.status == 'success') {
            location.reload();
        } else {
            $('input#name').addClass('error');
        }
    });
}
function deleteAccount(id){
    $.ajax({
        url: "/index.php/ajax/deleteAccount",
        type: "POST",
        cache: false,
        dataType: "json",
        data: {id: id}
    }).done( function ( result ) {
        if (result.status === 'success') {
            info_alert('Счет '+result.removedAcc.name+' удален <br />'
            +'<a class="restoreAcc" href="/index.php/accounts/restore/'+id+'">Восстановить</a>');
    
            $('div#acc'+id).remove();
        }
    });
}

$(document).ready(function(){

    $('a#add-account-button').click(function(e){
        if (!$(this).hasClass('form-active'))
            open_form();
        else
            add_account();
        
        e.preventDefault();
    });

    $('input#name').bind('keypress', function(e) {
        if ((e.keyCode || e.which) == 13) add_account();
    });


    $('div#main-menu > a.active').click(function(e){
        e.preventDefault();
    });
    
    $('div.accountitem').mouseover(function(){
        $(this).find('.sum > a.fa').show();
    });
    $('div.accountitem').mouseout(function(){
        $(this).find('.sum > a.fa').hide();
    });
    
    $('div.controls').on('click','a.deleteAcc',function(e){
        var accId = $(this).attr('id');
       deleteAccount(accId);
       
       e.preventDefault();
    });
    
    $('a.acc-sum-edit').on('click',function(e){ // debugger;
        $(this).show().addClass('editing');
        
        var sum = $(this).parent().find('span.sum').text();
        
        var p = $(this).position();
        $('div#edit-account-sum')
                .insertAfter($(this).parent())
                .show().css('right','0')
                .find('input.sum').val(sum).focus().select()
                .parent().find('input.id').val($(this).attr('id'));
    });
    
    $('.close-selector').on('click',function(){
        $(this).parent().hide();
    });
});

