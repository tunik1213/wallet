<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-04 11:50:06
         compiled from "application/views/index.left_frame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114593006554a7dfe41d2400-50557275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e650aa3c5ee65170aae7f2c87b4b85074047ae70' => 
    array (
      0 => 'application/views/index.left_frame.tpl',
      1 => 1420365005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114593006554a7dfe41d2400-50557275',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a7dfe41f6954_93233933',
  'variables' => 
  array (
    'accounts' => 0,
    'total' => 0,
    'acc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a7dfe41f6954_93233933')) {function content_54a7dfe41f6954_93233933($_smarty_tpl) {?><div class="clear h10"></div>

<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['acc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['acc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['acc']->key => $_smarty_tpl->tpl_vars['acc']->value) {
$_smarty_tpl->tpl_vars['acc']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['acc']->value['balance'], null, 0);?>
<?php } ?>
<div class="total-balance fs20">
    <span class="fw_b">Итого:</span>
    <span class="sum"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total']->value);?>
<span class="currency">UAH</span></span>
    
</div>
    
<div class="acc-list">
    <hr />
    <?php  $_smarty_tpl->tpl_vars['acc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['acc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['acc']->key => $_smarty_tpl->tpl_vars['acc']->value) {
$_smarty_tpl->tpl_vars['acc']->_loop = true;
?>
        <div class="account" id="acc<?php echo $_smarty_tpl->tpl_vars['acc']->value['id'];?>
">
            <div class="acc-name"><?php echo $_smarty_tpl->tpl_vars['acc']->value['name'];?>
</div>
            <div class="sum acc-balance"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['acc']->value['balance']);?>
</div>
        </div>
    <?php } ?>
</div>

<div class="manage-accs">
    <div class="clear h5"></div>
    <a class="common-link" href="/accounts">настроить счета</a>
</div>

<div class="clear h10"></div>

<div class="add-account-form">
    <table>
    <tr>
        <td class="ta_r"><label>Название:</label></td>
        <td><input type="text" id="name" /></td>
    </tr>
    
    </table>
</div>
<a href="#" class="button add-button" id="add-account-button">Добавить счет<span class="enter-key" style="display: none;" /></a>
   <?php }} ?>
