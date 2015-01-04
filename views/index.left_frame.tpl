<div class="clear h10"></div>

{$total=0}
{foreach $accounts as $acc}
    {$total = $total + $acc.balance}
{/foreach}
<div class="total-balance fs20">
    <span class="fw_b">Итого:</span>
    <span class="sum">{$total|string_format:"%.2f"}<span class="currency">UAH</span></span>
    
</div>
    
<div class="acc-list">
    <hr />
    {foreach $accounts as $acc}
        <div class="account" id="acc{$acc.id}">
            <div class="acc-name">{$acc.name}</div>
            <div class="sum acc-balance">{$acc.balance|string_format:"%.2f"}</div>
        </div>
    {/foreach}
</div>

<div class="manage-accs">
    <div class="clear h5"></div>
    <a class="common-link" href="/accounts">настроить счета</a>
</div>

<div class="add-account-form">
    <table>
    <tr>
        <td class="ta_r"><label>Название:</label></td>
        <td><input type="text" id="name" /></td>
    </tr>
    {*<tr>
        <td class="ta_r"><label>нач. баланс:</label></td>
        <td><input type="text" id="balance" value="0.00"/></td>
    </tr>*}
    </table>
</div>
    
<div class="add-button-container">
    <a href="#" class="button add-button" id="add-account-button">Добавить счет<span class="enter-key" style="display: none;" /></a>
</div>
   