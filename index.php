<?php
  include("includes/header.php");
  include("includes/nav.php");
  include("model/connect.php");

  $query = "SELECT * FROM main_page ORDER BY id DESC LIMIT 1";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
?>

<a href="<?php echo $row["bannerLink"]; ?>"><img src="https://shop.uofastore.com/skins/Skin_1/images/banners/<?php echo $row["bannerImg"]; ?>" alt="Order Textbooks" /></a>


<div class="container1">
<div class="bar">
  <h1 id="thin"><?php echo $row["title1"]; ?></h1>
  <p><?php echo $row["text1"]; ?></p>
  <center><a href="<?php echo $row["btnLink1"]; ?>"><button><?php echo $row["btn1"]; ?></button></a></center>




</div>
</div>



<div class="container3">
<div class="bar">

  <h2 class="subheader"><?php echo $row["title2"]; ?></h2>
  <p><?php echo $row["text2"]; ?></p>
  <center><a href="<?php echo $row["btnLink2"]; ?>"><button><?php echo $row["btn2"]; ?></button></a></center>

</div>
</div>



<div class="container1">
<div class="bar">
<div class="center">
<ul class="vcard">
  		<li class="fn"><h4>Textbook Department</h4></li>
		<li>BKST 219</li>
		<li>616 N. Garland Ave</li>
    	<li>Fayetteville AR, 72701</li>
    	<br />
        <li>Ricky Carney&emsp;(479) 575-7458&emsp;<a href="mailto:rxc002@uark.edu">Email</a></li>
		<li>Steve Pendleton&emsp;(479) 575-3735&emsp;<a href="mailto:textbook@uark.edu">Email</a></li>
		<li>Laura Smith&emsp;(479) 575-3737&emsp;<a href="mailto:textbook@uark.edu">Email</a></li>
		<li>Fax&emsp;(479) 575-7760&emsp;<a href="mailto:textbook@uark.edu">Email</a></li>
	</ul>
    </div>
</div>
</div>
<?php
  $result->close();
  $conn->close();

  include("includes/footer.php");
?>
