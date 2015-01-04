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
            $('div.add-account-form').hide();
            $(a).find('span.enter-key').hide();
            $(a).removeClass('form-active');
            $('div.acc-list').append(
                    '<div id="acc"'+result.insertedId+' class="account">'+
                    '<div class="acc-name">'+accName+'</div>'+
                    '<div class="sum acc-balance">0.00</div>'+
                    '</div>')
        } else {
            $('input#name').addClass('error');
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
});

