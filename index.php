<?php
  include("includes/header.php");
  include("includes/nav.php");
?>
<a href="https://shop.uofastore.com/courselistbuilder.aspx"><img src="https://uofastore.com/images/banner/2017-08-04_BeatTheRush.png" alt="Order Textbooks" /></a>

<div class="container1">
<div class="bar">

  Your name is: <?php echo $_POST['yourname']; ?><br />
Your e-mail: <?php echo $_POST['email']; ?><br />
<br />
Do you like this website? <?php echo $_POST['likeit']; ?><br />
<br />
Comments:<br />
<?php echo $_POST['comments']; ?>



<h2 class="subheader"><?php echo $_POST['title1']; ?></h2>
<p>
<?php echo $_POST['text1']; ?>

    <div class="medium-6 small-12 columns">
    <h5>New Textbooks</h5>
    <p>Mint condition, up to 50% buyback value<br />* Most Expensive</p>
    </div>
    <div class="medium-6 small-12 columns">
    <h5>Used Textbooks</h5>
    <p>Saves 25% compared to new textbooks, up to 50% buyback value<br />* May contain highlighting, notes and worn pages</p>
    </div>

    <hr /><br /><br />

<center><a href="https://shop.uofastore.com/t-textbookdisclaimer.aspx"><button>Buy Textbooks</button></a></center>
</p>

</div>
</div>

<div class="container2">
<div class="bar">
<h2 class="subheader"><?php echo $_POST['title2']; ?></h2>
<p>
<?php echo $_POST['text2']; ?>

    <div class="medium-6 small-12 columns">
    <h5>New Textbooks</h5>
    <p>Mint condition, up to 50% buyback value<br />* Most Expensive</p>
    </div>
    <div class="medium-6 small-12 columns">
    <h5>Used Textbooks</h5>
    <p>Saves 25% compared to new textbooks, up to 50% buyback value<br />* May contain highlighting, notes and worn pages</p>
    </div>

    <hr /><br /><br />

<center><a href="https://shop.uofastore.com/t-textbookdisclaimer.aspx"><button>Buy Textbooks</button></a></center>
</p>

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
  include("includes/footer.php");
?>
