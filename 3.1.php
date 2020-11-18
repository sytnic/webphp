<?php include("includes/layouts/header.php"); ?>

    <section id="mainContent"> 
      <!--************************************************************************
    Main content starts here
    ****************************************************************************-->
      
        <!-- Blog title -->
      <h1>3.1 Страничка с JavaScript</h1>
      <div id="bannerImage"><img src="images/mycode1000x300.jpg" alt=""/></div>
      
		
		<h2>Задача</h2>
	  <p>Итак, задача - дополнить страничку элементами JavaScript.</p>
		<h2>Задумка</h2>
      <p>Ну, с воображением у меня всегда были трудности. Поэтому попробую здесь что-нибудь воспроизвести.</p>
        <h2>Решение</h2>
		<button onclick="alert('Тут будут выполняться некоторые JavaScript элементы');">Что тут будет </button>
      <p>Итак, маленький скрипт, перебирающий картинки. Остановить можно, кликнув по картинке.</p>
		
	  <p><img id="mainImage" src="images/beach_houses.jpg" alt="" width="400" height="260" /></p>
		
	<p>Форма с обработкой событий onblur и onfocus:</p>
	
		<form class="highlight"><br>
		    <p style="padding-left: 10px;"><label>Name:</label>
			    <input type="text" id="name" value="your name"> <br>
			</p>
			<p style="padding-left: 10px;"><label>Email:</label>
			    <input type="text" id="email"> 
			</p><br>
		</form>

        <h2>Размышления</h2>
       <p>Кто-нибудь замечает, как правильно пишется Javascript? Да, судя по всему, правильно писать только JavaScript. А как он правильно произносится?..</p>

<?php include("includes/layouts/authorinfo.php"); ?>
    </section> 
      
<?php include("includes/layouts/sidebar.php"); ?>
<?php include("includes/layouts/footer.php"); ?>
    <script src="js/script.js"></script>
</body>
</html>
