<?php
  include("../includes/header.php");
  include("../includes/nav.php");
?>
<a href="https://shop.uofastore.com/courselistbuilder.aspx"><img src="https://uofastore.com/images/banner/2017-08-04_BeatTheRush.png" alt="Order Textbooks" /></a>


<style>
.error {color: #FF0000;}
</style>
<!--
<?php
// define variables and set to empty values
$bannerLinkErr = $bannerImgErr = $titleOneErr = $titleTwoErr = $textOneErr = $textTwoErr = $btnLink1Err = $btnLink2Err = $btn1Err = $btn2Err = $emailErr = $genderErr = $websiteErr = "";

$titleOne = $titleTwo = $textOne = $textTwo = $name = $email = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["bannerLink"])) {
    $bannerLinkErr = "bannerLink is required";
  } else {
    $bannerLink = test_input($_POST["bannerLink"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$bannerLink)) {
      $bannerLinkErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["bannerImg"])) {
    $bannerImgErr = "bannerImg is required";
  } else {
    $bannerImg = test_input($_POST["bannerImg"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$bannerImg)) {
      $bannerImgErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["titleOne"])) {
    $titleOneErr = "titleOne is required";
  } else {
    $titleOne = test_input($_POST["titleOne"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$titleOne)) {
      $titleOneErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["titleTwo"])) {
    $titleTwoErr = "titleTwo is required";
  } else {
    $titleTwo = test_input($_POST["titleTwo"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$titleTwo)) {
      $titleTwoErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["textOne"])) {
    $textOneErr = "textOne is required";
  } else {
    $textOne = test_input($_POST["textOne"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$textOne)) {
      $textOneErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["textTwo"])) {
    $textTwoErr = "textTwo is required";
  } else {
    $textTwo = test_input($_POST["textTwo"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$textTwo)) {
      $textTwoErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["btnLink1"])) {
    $btnLink1Err = "btnLink1 is required";
  } else {
    $btnLink1 = test_input($_POST["btnLink1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$btnLink1)) {
      $btnLink1Err = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["btn1"])) {
    $btn1Err = "btn1 is required";
  } else {
    $btn1 = test_input($_POST["btn1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$btn1)) {
      $btn1Err = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["btnLink2"])) {
    $btnLink2Err = "btnLink2 is required";
  } else {
    $btnLink2 = test_input($_POST["btnLink2"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$btnLink2)) {
      $btnLink2Err = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["btn2"])) {
    $btn2Err = "btn2 is required";
  } else {
    $btn2 = test_input($_POST["btn2"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$btn2)) {
      $btn2Err = "Only letters and white space allowed";
    }
  }




  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if email address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="container2">
<div class="bar">
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="../index.php">
  bannerImg: <input type="text" name="bannerImg" value="<?php echo $bannerImg;?>">
  <span class="error">* <?php echo $bannerImgErr;?></span>
  <br><br>
  bannerLink: <input type="text" name="bannerLink" value="<?php echo $bannerLink;?>">
  <span class="error">* <?php echo $bannerLinkErr;?></span>
  <br><br>

  titleOne: <input type="text" name="titleOne" value="<?php echo $titleOne;?>">
  <span class="error">* <?php echo $titleOneErr;?></span>
  <br><br>
  titleTwo: <input type="text" name="titleTwo" value="<?php echo $titleTwo;?>">
  <span class="error">* <?php echo $titleTwoErr;?></span>
  <br><br>

  textOne: <input type="text" name="textOne" value="<?php echo $textOne;?>">
  <span class="error">* <?php echo $textOneErr;?></span>
  <br><br>
  textTwo: <input type="text" name="textTwo" value="<?php echo $textTwo;?>">
  <span class="error">* <?php echo $textTwoErr;?></span>
  <br><br>

  btnLink1: <input type="text" name="btnLink1" value="<?php echo $btnLink1;?>">
  <span class="error">* <?php echo $btnLink1Err;?></span>
  <br><br>
  btnLink2: <input type="text" name="btnLink2" value="<?php echo $btnLink2;?>">
  <span class="error">* <?php echo $btnLink2Err;?></span>
  <br><br>

  btn1: <input type="text" name="btn1" value="<?php echo $btn1;?>">
  <span class="error">* <?php echo $btn1Err;?></span>
  <br><br>
  btn2: <input type="text" name="btn2" value="<?php echo $btn2;?>">
  <span class="error">* <?php echo $btn2Err;?></span>
  <br><br>



  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
</div>
</div>
-->

<form action="../index.php" method="post">
<p>Your Name: <input type="text" name="yourname" /><br />
E-mail: <input type="text" name="email" /></p>

<p>Do you like this website?
<input type="radio" name="likeit" value="Yes" checked="checked" /> Yes
<input type="radio" name="likeit" value="No" /> No
<input type="radio" name="likeit" value="Not sure" /> Not sure</p>

<p>Your comments:<br />
<textarea name="comments" rows="10" cols="40"></textarea></p>

<p><input type="submit" value="Send it!"></p>
</form>



<div class="container2">
<div class="bar">
<h2 class="subheader">TEXTBOOKS</h2>
<p>
The University of Arkansas Bookstore provides textbooks for sale in a variety of formats: New, Used, Rental and Digital. Each format has advantages and disadvantages. Each student should evaluate his or her textbook needs and select the best buying format.

    <div class="large-3 medium-6 small-12 columns">
    <h5>New Textbooks</h5>
    <p>Mint condition, up to 50% buyback value<br />* Most Expensive</p>
    </div>
    <div class="large-3 medium-6 small-12 columns">
    <h5>Used Textbooks</h5>
    <p>Saves 25% compared to new textbooks, up to 50% buyback value<br />* May contain highlighting, notes and worn pages</p>
    </div>
    <div class="large-3 medium-6 small-12 columns">
    <h5>Rental Textbooks</h5>
    <p>Saves up to 90% from new textbooks<br />* No buyback value, no ownership</p>
    </div>
    <div class="large-3 medium-6 small-12 columns">
    <h5>Digital Textbooks</h5>
    <p>Save space, protects the environment, cost can be lower<br />* No buyback value, access to text may expire</p>
    </div>
    <hr /><br /><br />

<center><a href="https://shop.uofastore.com/t-textbookdisclaimer.aspx"><button>Buy Textbooks</button></a></center>
</p>

</div>
</div>


<div class="container1" id="rental">
<div class="bar">
     <p>Textbook rental is available online and in-store. On average, textbook rental can save you up to 90%* on your textbooks when you buy textbooks from the U of A Bookstore.  To learn more about Textbook Rental, visit the <a href="#faq">Textbook Rental FAQ</a> section or call (479) 575-3010 to speak to a Textbook Department Representative.</p>
        <p><em>* This percentage was calculated based on taking full advantage of course material tax credits eligibility, new texbook retail pricing, textbook rental pricing, and product availability.</em></p>
      <hr />

      <p>The University of Arkansas Bookstore's textbook rental program will:
<ul>
    <li>Include thousands of the most popular textbook titles for rental.</li>
    <li>Save students money on the course materials they need to succeed academically.</li>
    <li>Provide students with a new option for fulfilling their course materials needs.</li>
    <li>Be available to students online at Bookstore Website for easy access.</li>
    <li>Allow students renting in-store to choose their preferred form of payment.</li>
    <li>Allow students the freedom to highlight and take notes within the normal limits.</li>
    <li>Give students the choice to buy their textbooks at the end of the term if they want to keep them.</li>
</ul>
</p><br /><br />

      <p class="center"><a href="https://shop.uofastore.com/t-textbookdisclaimer.aspx"><button>Rent Textbooks</button></a></p>

</div>
</div>

<div class="container2" id="faq">
<div class="bar">

<h1 class="subheader">Textbook Rental FAQ</h1>
<div class="ks-faq-items">
	<ul id="basics" class="ks-faq-group">
		<li>
			<a class="ks-faq-toggle" href="#0">How can I rent a textbook?</a>
			<div class="ks-faq-content">
				<p>By visiting the University of Arkansas Bookstore at Garland Center, or by visiting <a href="https://shop.uofastore.com/t-textbookdisclaimer.aspx">U of A Bookstore Online</a>.</p>
			</div> <!-- ks-faq-content -->
		</li>

        <li>
			<a class="ks-faq-toggle" href="#0">What is needed to register for the Bookstore textbook rental program?</a>
			<div class="ks-faq-content">
				<p>A valid UARK email address (i.e. username@uark.edu) and Student ID Number.</p>
			</div> <!-- ks-faq-content -->
		</li>

        <li>
			<a class="ks-faq-toggle" href="#0">What books are available to rent?</a>
			<div class="ks-faq-content">
				<p>Many textbook titles are available to rent at our in-store location and our online textbook rental site.</p>
			</div> <!-- ks-faq-content -->
		</li>

        <li>
			<a class="ks-faq-toggle" href="#0">Can I write and highlight in the rental textbooks?</a>
			<div class="ks-faq-content">
				<p>Yes. General wear and tear of the textbook and minimal highlighting is allowed. However, because we want to supply our students with the best product possible, it is very important that you keep the books you have rented in the best possible condition.</p>
			</div> <!-- ks-faq-content -->
		</li>

        <li>
			<a class="ks-faq-toggle" href="#0">What happens if the book is lost or damaged while being rented?</a>
			<div class="ks-faq-content">
				<p>If the textbook is determined unusable, you will be charged the replacement price of the book. Each textbook will be thoroughly inspected upon arrival to our store.<br /><br />
            Examples Include:
            <ul>
                <li>Include thousands of the most popular textbook titles for rental.</li>
                <li>Save students money on the course materials they need to succeed academically.</li>
                <li>Provide students with a new option for fulfilling their course materials needs.</li>
                <li>Be available to students online at Bookstore Website for easy access.</li>
                <li>Allow students renting in-store to choose their preferred form of payment.</li>
                <li>Allow students the freedom to highlight and take notes within the normal limits.</li>
                <li>Give students the choice to buy their textbooks at the end of the term if they want to keep them.</li>
		</ul><br />
        Any damage to a textbook that the Bookstore determines will make the textbook unusable will result in a full list price charge.

        </p>
			</div> <!-- ks-faq-content -->
		</li>

        <li>
			<a class="ks-faq-toggle" href="#0">What are the rental period options?</a>
			<div class="ks-faq-content">
				<p>You will be able to rent the textbooks for the full length of the term.</p>
			</div> <!-- ks-faq-content -->
		</li>

        <li>
			<a class="ks-faq-toggle" href="#0">Will I receive a return date notification?</a>
			<div class="ks-faq-content">
				<p>Yes, you will receive an email from the Bookstore a week before finals week to cordially remind you of your textbook rental return date.</p>
			</div> <!-- ks-faq-content -->
		</li>
        <li>
			<a class="ks-faq-toggle" href="#0">When is the rental textbook due back?</a>
			<div class="ks-faq-content">
				<p>Rental textbooks are due on the last day of finals.</p>
			</div> <!-- ks-faq-content -->
		</li>
        <li>
			<a class="ks-faq-toggle" href="#0">What if I miss the return date?</a>
			<div class="ks-faq-content">
				<p>If the book(s) are returned after the return date has passed, you will be charged the full used retail price of the book(s).</p>
			</div> <!-- ks-faq-content -->
		</li>
        <li>
			<a class="ks-faq-toggle" href="#0">What happens if I cancel a class or rented the wrong textbook?</a>
			<div class="ks-faq-content">
				<p>We understand that refunds will be requested from our customers for a number of reasons, including dropped or canceled classes. We provide a 3 week return period for full refund from the first day of classes for the Fall and Spring term, and a 1 week return period for Summer terms.</p>
			</div> <!-- ks-faq-content -->
		</li>
        <li>
			<a class="ks-faq-toggle" href="#0">What if I want to purchase the textbook/s I rented?</a>
			<div class="ks-faq-content">
				<p>If you decide you would like to purchase your rental textbook before your rental period expires, please contact the U of A Bookstore, you will be charged the full used retail price of the book.</p>
			</div> <!-- ks-faq-content -->
		</li>
        <li>
			<a class="ks-faq-toggle" href="#0">How do I check-in rental textbooks when I am through with them?</a>
			<div class="ks-faq-content">
				<p>To check-in your rental books, simply bring the rental textbook to the Bookstore at the info desk. The staff will process your rental books back into the system.</p>
			</div> <!-- ks-faq-content -->
		</li>
        </ul>
</div>

<p class="center"><a href="https://shop.uofastore.com/t-textbookdisclaimer.aspx"><button>Rent Textbooks</button></a></p>

</div>
</div>


<div class="container3" id="bookstore-policy">
<div class="bar">
	<h1 class="subheader">Bookstore Policy</h1>
    <p>
    <ul class="disc" style="color: #333;">
    <li>Prices and Availability may change without notice; though, we will always offer the 110% Low-Price Guarantee.</li>
	<li>We may run out-of-stock before filling your online order. We will attempt to notify you, if this is the case.</li>
    <li>USED and/or NEW textbooks may become out-of-stock before your online order is filled.</li>
	<li>USED books may or may not contain CDs that originally came with the NEW textbook.</li>
	<li>We will attempt to contact you if there is anything wrong with your online order.</li>
    </ul>
    </p>
<hr />
<p>
FALL/ SPRING: You may return textbooks within the first 3 weeks of classes start; afterwards, 48 hours.<br />
SUMMER: You may return textbooks within the first week of classes start; afterwards, 48 hours.<br />
9-WEEKS: You may return textbooks within the first week of classes start; afterwards, 48 hours.
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
  include("../includes/footer.php");
?>
