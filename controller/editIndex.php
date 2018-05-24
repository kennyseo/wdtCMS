<?php
  include("../includes/header.php");
  include("../includes/nav.php");
  include("../model/connect.php");

  $query = "SELECT * FROM main_page ORDER BY id DESC LIMIT 1";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
?>

<a href="<?php echo $row["bannerLink"]; ?>"><img src="https://shop.uofastore.com/skins/Skin_1/images/banners/<?php echo $row["bannerImg"]; ?>" alt="Order Textbooks" /></a>

<div class="container2">
<div class="bar">

  <select name="users" onchange="showUser(this.value)">
  <?php

    include("model/connect.php");
    $query = $conn->query("SELECT * FROM main_page ORDER BY added DESC");

      //Count total number of rows
      $rowCount = $query->num_rows;


    if($rowCount > 0){
        echo '<option value="">Select Added Date</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$row['added'].'</option>';
        }
    }else{
        echo '<option value="">Make not Available</option>';
    }
  ?>
  </select>

  <div id="txtHint"><b>Person info will be listed here...</b></div>


  <?php
  $query = "SELECT * FROM main_page ORDER BY id DESC LIMIT 1";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();

   ?>
   <!--
  <p>Main page was updated on <?php echo $row["added"]; ?> by ...</p>

  <form action="" method="post"  id="txtHint">
  <h2>Edit Page</h2>
  <label>bannerImg:</label>
  <input class="input" name="bannerImg" type="text" required="required" value="<?php echo $row["bannerImg"]; ?>" />
  <label>bannerLink:</label>
  <input class="input" name="bannerLink" type="text" required="required" value="<?php echo $row["bannerLink"]; ?>" />
  <label>title1:</label>
  <input class="input" name="title1" type="text" required="required" value="<?php echo $row["title1"]; ?>" />
  <label>text1:</label>
  <textarea cols="25" name="text1" rows="5" required="required"><?php echo $row["text1"]; ?></textarea>
  <label>title2:</label>
  <input class="input" name="title2" type="text" required="required" value="<?php echo $row["title2"]; ?>" />
  <label>text1:</label>
  <textarea cols="25" name="text2" rows="5" required="required"><?php echo $row["text2"]; ?></textarea>
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
-->
</div>
</div>

<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajax2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<?php
  include("../includes/footer.php");
?>

<?php
/*
  include("../model/connect.php");

  if(isset($_POST["submit"])) {
    $bannerImg = trim($_POST["bannerImg"]);
    $bannerLink = trim($_POST["bannerLink"]);
    $title1 = trim($_POST["title1"]);
    $title2 = trim($_POST["title2"]);
    $text1 = trim($_POST["text1"]);
    $text2 = trim($_POST["text2"]);
    $btnLink1 = trim($_POST["btnLink1"]);
    $btn1 = trim($_POST["btn1"]);
    $btnLink2 = trim($_POST["btnLink2"]);
    $btn2 = trim($_POST["btn2"]);

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
*/
?>
