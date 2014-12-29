<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>

    <link rel="stylesheet" href="/application/views/css/style.css" type="text/css" media="screen, projection"/>
    <script type="text/javascript" src="/application/views/js/engine.js"></script>
    
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
            {$content}
            <span class="fa-trash-o fa"></span>
        </div>
            
        <div id="footer">
            <span class="copyleft"></span>
            Igor Tunik, 2014
        </div>
    </div>

</body>
</html>