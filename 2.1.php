<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Webappdevelop</title>
<!-- <link href="styles/style.css" rel="stylesheet" type="text/css">  -->

</head>

<body>
 <div id="mainwrapper">
  <header> 
    <!--**************************************************************************
    Header starts here. It contains Logo and navigation links. 
    ****************************************************************************-->
    <div id="logo">
      <!-- <img src="logoImage.png" alt="sample logo"> -->
      <!-- Company Logo text -->
    <a href="index.php"><strong>WebAppDevelop</strong></a></div>
    <nav> <a href="index.php" title="Link">Главная</a> <a href="author.php" title="Link">Автор</a> </nav>
  </header>
	 <!-- Tagline -->
	 <p id="headertagline">Разработка веб-приложений</p>
  <div id="content">
    <div class="notOnDesktop"> 
      <!-- This search box is displayed only in mobile and tablet laouts and not in desktop layouts -->
      <input type="text" placeholder="Search">
    </div>
    <section id="mainContent"> 
      <!--************************************************************************
    Main content starts here
    ****************************************************************************-->
      <h1>
        <!-- Blog title -->
2.1 HTML-разметка без CSS</h1>
      <div id="bannerImage"><img src="images/mycode1000x300.jpg" alt=""/></div>
      
		
		<h2>Задача</h2>
	  <p>Что ж, задача состоит в том, чтобы сделать страничку только с разметкой. Т.е. без CSS. Но это я так понял.</p>
		<h2>Задумка</h2>
      <p>Никаких задумок. Прямо так и сделаем.</p>
        <h2>Решение</h2>
      <p>Решение нахожу в том, чтобы просто отключить css. Иначе говоря, закомментирую link с css в head'e.</p>
        <h2>Пояснения</h2>
      <p>Эта простейшая страничка растянулась всего где-то на 100 строк кода. В ней присутствуют такие <strong>семантические</strong> теги как</p>
        <ul style="font-size: 1.2em;">
          <li>header</li>
          <li>section</li>
          <li>article</li>
          <li>aside</li>
          <li>footer&nbsp;</li>
        </ul>
        <p>Здесь присутствут заголовки, параграфы, неупорядоченные списки.</p>
        <p>Как видно, отсутствие CSS не влият на возможность размещения картинок: изображения хорошо размещаются на страничке. К слову, именно так когда-то выглядели первые странички интернета, которыми пользовались учёные и военные США. Вполне самодостаточно, на мой взгляд.</p>
<p>Все остальные элементы, по типу видео, будут добавлены в следующем задании.</p>
</section>
    <section id="sidebar"> 
      <!--************************************************************************
    Sidebar starts here. It contains a searchbox, sample ad image and links
    ****************************************************************************-->
      <input type="text" placeholder="Search">
      <div id="adimage"><img src="images/300x250.gif" alt=""/></div>
      <nav>
        <ul>
		      <li><a href="1.2.php" title="Link">1.2 Просмотр сертификата и IP сайта</a></li>	
          <li><a href="2.1.php" title="Link">2.1 HTML-разметка без CSS</a></li>
          <li><a href="2.2.php" title="Link">2.2 HTML-разметка с CSS</a></li>
          <li><a href="3.1.php" title="Link">3.1 Страничка с JS</a></li>
          <li><a href="3.2.php" title="Link">3.2 Страничка с JQuery</a></li>
          <li><a href="4.1.php" title="Link">4.1 Скриншоты работы с Git</a></li>
          <li><a href="5.1.php" title="Link">5.1 Результаты команд в терминале Linux</a></li>
	    	  <li><a href="5.2.php" title="Link">5.2 Разработка PHP-приложения</a></li>
		      <li><a href="6.2.php" title="Link">6.2 Создать и протестировать БД</a></li>
        </ul>
      </nav>
    </section>

<?php include("includes/layouts/footer.php"); ?>
</body>
</html>
