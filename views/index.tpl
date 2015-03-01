<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
        
    <script type="text/javascript" src="/application/views/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="/application/views/js/jquery.jgrowl.min.js"></script>
    <script type="text/javascript" src="/application/views/js/engine.js"></script>

    <link rel="stylesheet" href="/application/views/css/style.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="/application/views/css/jquery.jgrowl.min.css" type="text/css" media="screen, projection"/>
    
    <link rel="stylesheet" href="/application/views/css/font-awesome.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="/application/views/css/wrapper.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="/application/views/css/left-frame.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="/application/views/css/accounts.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="/application/views/css/products.css" type="text/css" media="screen, projection"/>

</head>

<body>
    <div id="header">
        <a class="logo" href="/">
            <span class="text-blue">Buba</span>
            <span class="text-white">Money</span>
        </a>

        <div id="main-menu">
            <a href="/main" {if $active_page=='orders'}class="active"{/if}>Записи</a>
            <a href="/products" {if $active_page=='products'}class="active"{/if}>Товары/услуги</a>
            <a href="/accounts" {if $active_page=='accounts'}class="active"{/if}>Счета</a>
            <a href="/statistics" {if $active_page=='statistics'}class="active"{/if}>Статистика</a>
        </div>
    </div>
    
    <div id="container">
        <div id="content">
            <div style="padding:10px; padding-left:20px;">
                {$content}
            </div>
        </div>

        <div id="left">
            {include file="index.left_frame.tpl"}
        </div>
    </div>
    <div id="footer">
        <span class="copyleft"></span>
        Igor Tunik, 2015
    </div>
</body>


</html>