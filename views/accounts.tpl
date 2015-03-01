<div class="page-title">
    <h1>Настроить счета</h1>
    <hr />
</div>
<div class="accounts-detail-list">
    {foreach $accounts as $acc}
        <div class="accountitem" id="acc{$acc.id}">
            <div class="acc-name">
                <a class="fs20 text-black" href="/accounts/account/{$acc.id}">{$acc.name}</a>
            </div>
            <div class="controls">
                <a class="fs10 editAcc" id="{$acc.id}" href="#">Редактировать</a>
                | 
                <a class="fs10 deleteAcc" id="{$acc.id}" href="#">Удалить</a>
            </div>

            <div class="sum">
                <span class="sum">{$acc.balance|string_format:"%.2f"}</span>
                <span class="currency">UAH</span>
                <br />
                <a class="fa fa-pencil-square-o acc-sum-edit open-modal" modal="#edit-account-sum" id="{$acc.id}" href="#"> скорректировать</a>
            </div>

            <div style="clear: both">

            </div>
        </div>
                                
    {/foreach}
</div>

{* hidden forms *}
<div id="edit-account-sum" class="modal-form">
    <div class="close-selector fa fa-times"></div>
    <form action="/index.php/accounts/correct/" method="post">
        <h3>Корректировка остатка</h3>
        <hr />
        <input type="text" class="sum" name="sum" />
        <input type="hidden" name="id" class="id"/>
        <a href="#" class="button form-submit">ок<span class="enter-key" style="top:3px;" /></a>
    </form>
</div>
{literal}
<script type="text/javascript">
    $('a.acc-sum-edit').on('click',function(e){
        $(this).show().addClass('editing');
        
        var sum = $(this).parent().find('span.sum').text();

        $('div#edit-account-sum')
                .find('input.sum').val(sum)
                .parent().find('input.id').val($(this).attr('id'));
    });
</script>
{/literal}