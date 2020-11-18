<?php include("includes/layouts/header.php"); ?>

    <section id="mainContent"> 
      <!--************************************************************************
    Main content starts here
    ****************************************************************************-->

          <!-- Blog title -->
    <h1>1.2 Просмотр сертификата и IP сайта</h1>
     
      <div id="bannerImage"><img src="images/mycode1000x300.jpg" alt=""/></div>
      
		
		<h2>Задача</h2>
	  <p>Задача - яснее не придумаешь. Но сначала я ее не понял )). </p>
		<h2>Задумка</h2>
      <p>Итак, берём любой сайт и смотрим. Возьмём github.</p>
        <h2>Решение</h2>
      <p>Всё решение в скриншотах, естественно. Точнее, в тегах img.</p>
	  <p>Смотрим на примере Firefox Developer Edition.</p>	
        <img src="images/githubcert1.jpg" alt=""/>
		<br><br>
        <img src="images/githubcert2.jpg" alt=""/>
		<br><br>
		<img src="images/githubcert3.jpg" alt=""/>
		<p>По кнопке "Просмотреть сертификат" Firefox выдаёт страничку с подробной информацией по сертификату и его пути.</p>
		<img src="images/githubcert4.jpg" alt=""/>
		<br><br>
      <p>Ну а IP узнаём на сайте 2ip.ru.</p>
        <img src="images/githubip.jpg" width="776" height="601" alt=""/>
<p>То есть IP сайта github.com - 140.82.121.3</p>
		
		<h2>Размышления</h2>
      <p>Ну, картинки в тегах img - не резиновые. Нужна, конечно, тонкая работа со стилями, чтобы иображения растягивались и сжимались. Примерно так, как работает самый верхний баннер с изображением кода.</p>
		
<?php include("includes/layouts/authorinfo.php"); ?>
    </section>

<?php include("includes/layouts/sidebar.php"); ?>
<?php include("includes/layouts/footer.php"); ?>
</body>
</html>