<?php
  include("includes/header.php");
  include("includes/nav.php");
  include("model/connect.php");

  $sql = "SELECT * FROM main_page WHERE id = '5' ";


 while( $row = $sql->fetch()) :

?>
<a href="https://shop.uofastore.com/courselistbuilder.aspx"><img src="https://uofastore.com/images/banner/2017-08-04_BeatTheRush.png" alt="Order Textbooks" /></a>



<div class="container1">
<div class="bar">
<p>
<?php echo $row['title1']; ?>
</p>



</div>
</div>




  <div class="container1">
  <div class="bar">


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
endwhile
  include("includes/footer.php");
?>
