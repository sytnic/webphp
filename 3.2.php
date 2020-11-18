<?php include("includes/layouts/header.php"); ?>

    <section id="mainContent"> 
      <!--************************************************************************
    Main content starts here
    ****************************************************************************-->
      
        <!-- Blog title -->
      <h1>3.2 Страничка с JQuery</h1>
      <div id="bannerImage"><img src="images/mycode1000x300.jpg" alt=""/></div>
      
		
		<h2>Задача</h2>
	  <p>Задача, особенно для такого бэкэндщика, как я, звучит угрожающе: создание, поиск элементов, обработка событий с помощью JQuery, добавление анимаций и обработка запросов с помощью JQuery.</p>
		<h2>Задумка</h2>
      <p>Хорошо. Как минимум есть понимание, что делать. Вот и надо делать, по порядку.</p>
        <h2>Решение</h2>
      <p>Начну с простого. <strong>Поиск</strong> элементов. Тестовый параграф для примера. JQuery находит его по id и добавляет к нему выбранный дополнительный класс с жёлтым фоном.</p>
		
		<p id="test1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in.</p>
		<h2>Еще один заголовок второго уровня</h2>
		<p>Да, и не кликайте по заголовкам второго уровня, а то они поменяются! Это пример <strong>создания</strong> немного другого элемента, совмещенное с <strong>обработкой события</strong> клика, при помощи JQuery.</p>
		
		<p>Создадим еще один тестовый параграф. Теперь, кликая по нему, JQuery обработает событие клика и "попросит" параграф медленно "испариться". Пример эдакой <strong>анимации</strong>.</p>
		
		<p id="test2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in.</p>
		
		<p>Ну а по <strong>запросам</strong> я пока застрял. Причин несколько, но основная из них - у меня сегодня отключился интернет. Конечно, если покопаться  в интернете и посидеть над этим вопросом, его тоже можно решить. Я так понял, речь идёт о запросах, связанных одновременно с JQuery и AJAX.</p>
			
		<p>Да, и картинку можно тоже "убрать", кликнув по ней.</p>
		
	  <p><img id="mainImage" src="images/beach_houses.jpg" alt="" width="400" height="260" /></p>
		
        <h2>Размышления</h2>
       <p>JQuery, конечно, даёт много интересных возможностей. Их можно подробно изучить на сайте jquery.com.</p>
		
<?php include("includes/layouts/authorinfo.php"); ?>
    </section>

<?php include("includes/layouts/sidebar.php"); ?>
<?php include("includes/layouts/footer.php"); ?>
	<!-- Нет интернета. 3.3.1 - это самое лучшее, что я нашёл у себя. -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/scriptforjquery.js"></script>
</body>
</html>
