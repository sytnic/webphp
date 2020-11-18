<!--    <section id="sidebar"> 
      
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
-->   
<section id="sidebar"> 
      <input type="text" placeholder="Search">
      <div id="adimage"><img src="images/300x250.gif" alt=""/></div>
      <nav> 
      <ul>
<?php 
    $set = find_all_pages();
    while($row = mysqli_fetch_assoc($set)) {
      echo '<li>';
      echo '<a href="page.php?id=';  // important place!
      echo $row['id'];
      echo '" ';
 
      echo ' title="Link"> ';
      echo htmlentities($row['number']);
      echo ' ';
      echo htmlentities($row['title']);
      echo '</a></li>';     
      
  }

?>
</ul>
     </nav>
    </section>