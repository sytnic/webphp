<?php include("includes/layouts/header.php"); ?>

  <section id="mainContent"> 
      <!--************************************************************************
    Main content starts here
    ****************************************************************************-->
    		
          <!-- Blog title -->
    <h1>2.2 HTML разметка c CSS</h1>
     
      <div id="bannerImage"><img src="images/mycode1000x300.jpg" alt=""/></div>
      
		
		<h2>Задача</h2>
	  <p>Итак, теперь задача - добавить побольше html-элементов, включая что-то новое из HTML5. Вместе с CSS. </p>
		<h2>Задумка</h2>
      <p>Ну что ж. Добавим сюда табличку и видео.</p>
        <h2>Решение</h2>
      <p>Зачем говорить о решении, если на него лучше посмотреть?</p>
		<table width="400" border="1">
  <tbody>
    <tr>
      <th scope="col">&nbsp;1 столбец</th>
      <th scope="col">&nbsp;2 столбец</th>
      <th scope="col">&nbsp;3 столбец</th>
      <th scope="col">&nbsp;4 столбец</th>
    </tr>
    <tr>
      <td>&nbsp;2 строка</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;3 строка</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
        <p>На самом деле, вот эта объемная граница между ячейками может настраиваться средствами стилей: до одиночной линиии (с помощью collapse) или даже вовсе быть убранной. Вообще, просто теги table без стилей создают таблицу именно без границ. </p>
      <p>Ну а теперь видео.</p>
        <p>Попробую вставить.</p>
		<iframe width="420" height="345" src="https://www.youtube.com/embed/2MsN8gpT6jY">
</iframe>
		<p>Это Ютуб видео. Здесь используются теги iframe. Если нужно вставить собственное сохранённое видео, то нужно применять немного другие теги: теги video.</p>
		<p>Возможность напрямую встраивать видео на страницу появилась в HTML5.</p>
      
<?php include("includes/layouts/authorinfo.php"); ?>  
  </section>

<?php include("includes/layouts/sidebar.php"); ?>
<?php include("includes/layouts/footer.php"); ?>
</body>
</html>
