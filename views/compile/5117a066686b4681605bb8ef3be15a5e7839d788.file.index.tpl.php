<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-04 11:57:10
         compiled from "application/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1961714543549dbcf83f19f3-53722658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5117a066686b4681605bb8ef3be15a5e7839d788' => 
    array (
      0 => 'application/views/index.tpl',
      1 => 1420365429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1961714543549dbcf83f19f3-53722658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549dbcf84f06f5_57320785',
  'variables' => 
  array (
    'active_page' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549dbcf84f06f5_57320785')) {function content_549dbcf84f06f5_57320785($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
        
    <?php echo '<script'; ?>
 type="text/javascript" src="/application/views/js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" href="/application/views/css/style.css" type="text/css" media="screen, projection"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="/application/views/js/engine.js"><?php echo '</script'; ?>
>
    
    <link rel="stylesheet" href="/application/views/css/font-awesome.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="/application/views/css/wrapper.css" type="text/css" media="screen, projection"/>
     <link rel="stylesheet" href="/application/views/css/left-frame.css" type="text/css" media="screen, projection"/>

</head>

<body>
    <div id="header">
        <a class="logo" href="/">
            <span class="text-blue">Buba</span>
            <span class="text-white">Money</span>
        </a>

        <div id="main-menu">
            <a href="/orders" <?php if ($_smarty_tpl->tpl_vars['active_page']->value=='orders') {?>class="active"<?php }?>>Записи</a>
            <a href="/products" <?php if ($_smarty_tpl->tpl_vars['active_page']->value=='products') {?>class="active"<?php }?>>Товары/услуги</a>
            <a href="/accounts" <?php if ($_smarty_tpl->tpl_vars['active_page']->value=='accounts') {?>class="active"<?php }?>>Счета</a>
            <a href="/statistics" <?php if ($_smarty_tpl->tpl_vars['active_page']->value=='statistics') {?>class="active"<?php }?>>Статистика</a>
        </div>
    </div>
    
    <div id="container">
        <div id="content">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>

        <div id="left">
            <?php echo $_smarty_tpl->getSubTemplate ("index.left_frame.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
    <div id="footer">
        <span class="copyleft"></span>
        Igor Tunik, 2015
    </div>
</body>


</html><?php }} ?>
