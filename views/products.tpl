<div class="page-title">
    <h1>Товары</h1>
    <hr />
</div>

<h3>Категории</h3>
{if $categories|@count > 0}
    {foreach $categories as $cat}
        {$cat.name}
    {/foreach}
{else}
    Список категорий пуст
{/if}

<hr />

<h3>Товары</h3>
{if $categories|@count > 0}
    {foreach $categories as $cat}
        {$cat.name}
    {/foreach}
{else}
    Список товаров пуст
{/if}