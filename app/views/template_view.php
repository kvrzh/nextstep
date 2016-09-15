<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="/js/jquery-3.1.0.js" type="text/javascript"></script>
    <script src="/js/script.js" type="text/javascript"></script>

</head>
<body>
<header>

    <div class="logo">
        <a href="/"> <img src="/images/logo.png">
        <h1>Play<b>ON</b></h1></a>
    </div>
    <nav>
        <a href="/">Турниры</a>
        <a href="/rules">Правила</a>
    </nav>
    <div class="search">
        <form method="post">

            <input name="search" placeholder=" Поиск по сайту" type="search">
            <input type="submit" value="" name="searchgo">

        </form>
    </div>
    <div class="login-main">
        <?php echo headerlog(); ?>
    </div>
</header>
<div class="content">
    <?php include $content_view; ?>
</div>
</body>
</html>