<h1>Настроить счета</h1>
<hr style="margin-left: -10px" />
<div class="accounts-detail-list">
    {foreach $accounts as $acc}
        <div class="accountitem" id="acc{$acc.id}">
            <div class="acc-name">
                <a class="fs20 text-black" href="/accounts/account/{$acc.id}">{$acc.name}</a>
            </div>
            <div class="controls">
                <a class="fs10 edit{$acc.id}" href="#">Редактировать</a>
                | 
                <a class="fs10 delete{$acc.id}" href="#">Удалить</a>
            </div>

            <div class="sum">
                {$acc.balance|string_format:"%.2f"}
                <span class="currency">UAH</span>
                <br />
                <a class="fa fa-pencil-square-o sum-edit{$acc.id}" href="#"> скорректировать</a>
            </div>

            <div style="clear: both">

            </div>
        </div>
                                
    {/foreach}
</div>