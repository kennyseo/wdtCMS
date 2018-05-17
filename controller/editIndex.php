<?php
  include("../includes/header.php");
  include("../includes/nav.php");
  include("../model/connect.php");

  $query = "SELECT * FROM main_page ORDER BY id DESC LIMIT 1";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();



?>
<a href="https://shop.uofastore.com/courselistbuilder.aspx"><img src="https://uofastore.com/images/banner/2017-08-04_BeatTheRush.png" alt="Order Textbooks" /></a>

<div class="container2">
<div class="bar">
  <p>Main page was updated on <?php echo $row["added"]; ?> by ...</p>
  <form action="" method="post">
  <h2>Edit Page</h2>
  <label>bannerImg:</label>
  <input class="input" name="bannerImg" type="text" required="required" value="<?php echo $row["bannerImg"]; ?>" />
  <label>bannerLink:</label>
  <input class="input" name="bannerLink" type="text" required="required" value="<?php echo $row["bannerLink"]; ?>" />
  <label>title1:</label>
  <input class="input" name="title1" type="text" required="required" value="<?php echo $row["title1"]; ?>" />
  <label>text1:</label>
  <textarea cols="25" name="text1" rows="5" required="required" value="<?php echo $row["text1"]; ?>"></textarea>
  <label>title2:</label>
  <input class="input" name="title2" type="text" required="required" value="<?php echo $row["title2"]; ?>" />
  <label>text1:</label>
  <textarea cols="25" name="text2" rows="5" required="required" value="<?php echo $row["text2"]; ?>"></textarea>
  <label>btnLink1:</label>
  <input class="input" name="btnLink1" type="text" required="required" value="<?php echo $row["btnLink1"]; ?>" />
  <label>btn1:</label>
  <input class="input" name="btn1" type="text" required="required" value="<?php echo $row["btn1"]; ?>" />
  <label>btnLink2:</label>
  <input class="input" name="btnLink2" type="text" required="required" value="<?php echo $row["btnLink2"]; ?>" />
  <label>btn2:</label>
  <input class="input" name="btn2" type="text" required="required" value="<?php echo $row["btn2"]; ?>" />

  <br>
  <input class="button" name="submit" type="submit" value="Edit Main Page">
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
