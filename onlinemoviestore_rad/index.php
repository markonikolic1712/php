<?php
$conn = mysqli_connect("localhost","root","","moviestore");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Movie Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  <div id="inner">
    <div id="header">
      <h1><img src="images/logo.gif" width="519" height="63" alt="Online Movie Store" /></h1>
      <div id="nav"> <a href="http://www.free-css.com/">HOME</a> | <a href="http://www.free-css.com/">view cart</a> | <a href="http://www.free-css.com/">help</a> </div>
      <!-- end nav -->
      <a href="http://www.free-css.com/"><img src="images/header_1.jpg" width="744" height="145" alt="Harry Potter cd" /></a> <a href="http://www.free-css.com/"><img src="images/header_2.jpg" width="745" height="48" alt="" /></a> </div>
    <!-- end header -->
    <dl id="browse">
      <dt>Full Category Lists</dt>
      <?php
      $conn = mysqli_connect("localhost","root","","moviestore");
      $q = mysqli_query($conn, "select * from categories");
      while($rw = mysqli_fetch_object($q)){
        ?>
      <dd><a href="index.php?cid=<?php echo $rw->id ?>"><?php echo $rw->name ?></a></dd>      
      <?php
      }
      ?>
      <dt>Search Your Favourite Movie</dt>
      <dd class="searchform">
        <form action="http://www.free-css.com/" method="get">
          <div>
            <select name="cat">
              <option value="-" selected="selected">CATEGORIES</option>
              <option value="-">------------</option>
            </select>
          </div>
          <div>
            <input name="q" type="text" value="DVD TITLE" class="text" />
          </div>
          <div class="softright">
            <input type="image" src="images/btn_search.gif" />
          </div>
        </form>
      </dd>
    </dl>
    <div id="body">
      <div class="inner">
        <?php 
        include "modules/movies.php";
        ?>
      </div>
      <!-- end .inner -->
    </div>
    <!-- end body -->
    <div class="clear"></div>
    <div id="footer"> Web design by <a href="http://www.freewebsitetemplates.com">free website templates</a> &nbsp;
      <div id="footnav"> <a href="http://www.free-css.com/">Legal</a> | <a href="http://www.free-css.com/">Home</a> </div>
      <!-- end footnav -->
    </div>
    <!-- end footer -->
  </div>
  <!-- end inner -->
</div>
<!-- end wrapper -->
</body>
</html>
