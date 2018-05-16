
<?php
  include("../includes/header.php");
  include("../includes/nav.php");
  include("../model/connect.php");
?>
<a href="https://shop.uofastore.com/courselistbuilder.aspx"><img src="https://uofastore.com/images/banner/2017-08-04_BeatTheRush.png" alt="Order Textbooks" /></a>

<div class="container2">
<div class="bar">

  <form action="../controller/editIndex.php" method="post">
  <h2>Form</h2>
  <label>bannerImg:</label>
  <input class="input" name="bannerImg" type="text" value="">
  <label>bannerLink:</label>
  <input class="input" name="bannerLink" type="text" value="">
  <label>title1:</label>
  <input class="input" name="title1" type="text" value="">
  <label>text1:</label>
  <textarea cols="25" name="text1" rows="5"></textarea>
  <label>title2:</label>
  <input class="input" name="title2" type="text" value="">
  <label>text1:</label>
  <textarea cols="25" name="text2" rows="5"></textarea>
  <label>btnLink1:</label>
  <input class="input" name="btnLink1" type="text" value="">
  <label>btn1:</label>
  <input class="input" name="btn1" type="text" value="">
  <label>btnLink2:</label>
  <input class="input" name="btnLink2" type="text" value="">
  <label>btn2:</label>
  <input class="input" name="btn2" type="text" value="">

  <br>
  <input class="submit" name="submit" type="submit" value="Insert">
  </form>

</div>
</div>
<?php
  include("../includes/footer.php");
?>
