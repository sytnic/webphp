<footer> 
      <!--************************************************************************
    Footer starts here
    ****************************************************************************-->
      <article>
        <h3>Github</h3>
        <p>Этот сайт обновляется на github.com/sytnic/webphp .</p>
      </article>
      <article>
        <h3>www</h3>
        <p>Этот сайт написан на php. Он имеет html-аналог в сети: <a href="http://webappdevelop.sytnic.ru">webappdevelop.sytnic.ru</a>.</p>
      </article>
    </footer>
  </div> <!-- the end <div id="content">  -->
  <div id="footerbar"><!-- Small footerbar at the bottom --></div>
</div> <!-- the end <div id="mainwrapper">  -->

<?php
  // 5. Close database connection
  if (isset($connection)){
	  mysqli_close($connection);}
  
?>