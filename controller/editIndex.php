<?php
  //include("../includes/header.php");
  ///include("../includes/nav.php");
  include("../model/connect.php");
?>
<a href="https://shop.uofastore.com/courselistbuilder.aspx"><img src="https://uofastore.com/images/banner/2017-08-04_BeatTheRush.png" alt="Order Textbooks" /></a>

<div class="container2">
<div class="bar">

  <form action="" method="post">
  <h2>Form</h2>
  <label>bannerImg:</label>
  <input class="input" name="bannerImg" type="text" required="required" placeholder="">
  <label>bannerLink:</label>
  <input class="input" name="bannerLink" type="text" required="required" placeholder="">
  <label>title1:</label>
  <input class="input" name="title1" type="text" required="required" placeholder="">
  <label>text1:</label>
  <textarea cols="25" name="text1" rows="5" required="required" placeholder=""></textarea>
  <label>title2:</label>
  <input class="input" name="title2" type="text" required="required" placeholder="">
  <label>text1:</label>
  <textarea cols="25" name="text2" rows="5" required="required" placeholder=""></textarea>
  <label>btnLink1:</label>
  <input class="input" name="btnLink1" type="text" required="required" placeholder="">
  <label>btn1:</label>
  <input class="input" name="btn1" type="text" required="required" placeholder="">
  <label>btnLink2:</label>
  <input class="input" name="btnLink2" type="text" required="required" placeholder="">
  <label>btn2:</label>
  <input class="input" name="btn2" type="text" required="required" placeholder="">

  <br>
  <input class="submit" name="submit" type="submit" value="Insert">
  </form>

</div>
</div>
<?php
  include("../includes/footer.php");
?>

<?php
  include("../model/connect.php");

  if(isset($_POST["submit"])) {
    $sql = "INSERT INTO main_page (bannerImg, bannerLink, title1, text1, title2, text2, btnLink1, btn1, btnLink2, btn2) values (
      '".$_POST["bannerImg"]."',
      '".$_POST["bannerLink"]."',
      '".$_POST["title1"]."',
      '".$_POST["text1"]."',
      '".$_POST["title2"]."',
      '".$_POST["text2"]."',
      '".$_POST["btnLink1"]."',
      '".$_POST["btn1"]."',
      '".$_POST["btnLink2"]."' ,
      '".$_POST["btn2"]."' )";


    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }

?>
