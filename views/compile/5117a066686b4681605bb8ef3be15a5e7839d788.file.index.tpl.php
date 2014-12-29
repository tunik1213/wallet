<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-29 21:35:39
         compiled from "application/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1961714543549dbcf83f19f3-53722658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5117a066686b4681605bb8ef3be15a5e7839d788' => 
    array (
      0 => 'application/views/index.tpl',
      1 => 1419881737,
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
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549dbcf84f06f5_57320785')) {function content_549dbcf84f06f5_57320785($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>

    <link rel="stylesheet" href="/application/views/css/style.css" type="text/css" media="screen, projection"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="/application/views/js/engine.js"><?php echo '</script'; ?>
>
    
    <link rel="stylesheet" href="/application/views/css/font-awesome.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="/application/views/css/wrapper.css" type="text/css" media="screen, projection"/>

</head>

<body>

    <div id="wrapper">
        <div id="header">
            <a class="logo" href="/">
                <span class="text-blue">Buba</span>
                <span class="text-white">Money</span>
            </a>
            
            <div id="main-menu">
                <a href="/orders">Записи</a>
                <a href="/products">Товары/услуги</a>
                <a href="/statistics">Статистика</a>
            </div>
        </div>
        
        <div id="content">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <span class="fa-trash-o fa"></span>
        </div>
            
        <div id="footer">
            <span class="copyleft"></span>
            Igor Tunik, 2014
        </div>
    </div>

</body>
</html><?php }} ?>
