<div class="page-title">
    <h1>Товары</h1>
    <hr />
</div>

<div id="cats-list" class="item-list">
    <h3>Категории</h3>
    {if $categories|@count > 0}
        {foreach $categories as $cat}
            {$cat.name}
        {/foreach}
    {else}
        Список категорий пуст
    {/if}
    
    <a class="button add-button add-item open-modal" modal="#cat-add" id="add-product">Новая категория</a>
</div>

<hr />

<div id="products-list" class="item-list">
    <h3>Товары</h3>
    {if $categories|@count > 0}
        {foreach $categories as $cat}
            {$cat.name}
        {/foreach}
    {else}
        Список товаров пуст
    {/if}
    
    <a class="button add-button add-item" id="add-product">Новый товар</a>
</div>
    
    
    
{* hidden forms *}
<div id="cat-add" class="modal-form">
    <div class="close-selector fa fa-times"></div>
    <form action="/index.php/products/addCat/" method="post">
        <h3>Создать категорию</h3>
        <hr />
        <input type="text" class="name" name="name" />
        <a href="#" class="button form-submit">ок<span class="enter-key" style="top:3px;" /></a>
    </form>
</div>
{literal}
<script type="text/javascript">
    $('div#edit-account-sum').on('click','a.button',function(e){
       e.preventDefault();
       $('div#edit-account-sum form').submit();
    });
</script>
{/literal}