<?php
  inlcude("includes/header.php");
?>

<div class="contain-to-grid ">
<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
     <h1 class="show-for-medium"><a href="https://uofastore.com"><img src="https://uofastore.com/images/uark_logo/uarkbookstore_white1.png" width="150" /></a></h1>

			<h1 class="show-for-small-down"><a href="https://uofastore.com"><img src="https://uofastore.com/images/uark_logo/uarkbookstore_white2.png" width="80" style="margin-top: -10px;"/></a></h1>

      <h1 class="show-for-large-up"><a href="https://uofastore.com"><img src="https://uofastore.com/images/uark_logo/uarkbookstore_white1.png" width="310" ></a></h1>
    </li>
    <li class="toggle-topbar menu-icon">
      <a href="#"><span>Menu</span></a>
    </li>
  </ul>

  <section class="top-bar-section">

    <ul class="right">
      <li class="hide-for-medium">
      	<a href="https://uofastore.com/">Home</a>
      </li>
      <li class="has-dropdown"><!-- Books Starts -->
        <a href="https://uofastore.com/textbook" class="show-for-large-up">Books</a><a class="show-for-medium-down">Books</a>
        <ul class="dropdown m-menu">
          <li>
            <div class="row">

              <div class="medium-6 column">
                <h3>TEXTBOOKS</h3>
                <ul>
                  <li>
                    <a href="https://uofastore.com/textbook"><i class="icon-circle-right"></i>Textbook Home</a>
                  </li>
                  <li>
                    <a href="https://shop.uofastore.com/t-textbookdisclaimer.aspx"><i class="icon-circle-right"></i>Order/Rent Textbooks</a>
                  </li>
                  <!--
                  <li>
                    <a href="https://shop.uofastore.com/preorderdisclaimer.aspx"><i class="icon-circle-right"></i>Pre-Order Fall Class Textbooks</a>
                  </li>
                  -->
                  <li>
                    <a href="https://uofastore.com/textbook/affordability.php"><i class="icon-circle-right"></i>Textbook Affordability</a>
                  </li>
                  <li class="hide-for-small-only">&nbsp;</li>
                </ul>
              </div><!--end of .column-->
              <div class="medium-6 column">
                <h3>GENERAL BOOKS</h3>
                <ul>
                   <li>
                    <a href="https://uofastore.com/generalbook"><i class="icon-circle-right"></i>General Book Home</a>
                  </li>
                  <li>
                    <a href="https://shop.uofastore.com/c-11-general-books.aspx"><i class="icon-circle-right"></i>Search Books</a>
                  </li>
                  <!--<li>
                    <a href="#"><i class="icon-circle-right"></i>One Book, One Community</a>
                  </li>-->
                  <li>
                    <a href="https://uofastore.com/generalbook#event"><i class="icon-circle-right"></i>Special Events</a>
                  </li>
                  <li class="hide-for-small-only">&nbsp;</li>
                </ul>
              </div><!--end of .column-->
            </div><!--end of .row-->

            <div class="row">
              <div class="medium-6 column hide-for-medium-down">
                <h3>TextBooks</h3>
                <a href="https://uofastore.com/textbook/" class="intro">
                  <!--<i class="icon-play"></i>-->
                  <img src="https://uofastore.com/images/banners/2015-07-30_fall-rush.png" />
                </a>
              </div><!--end of .column-->
              <div class="medium-6 column hide-for-medium-down">
                <h3>U of A Bookstore</h3>
                <a href="https://uofastore.com/generalbook" class="intro">
                  <img src="https://uofastore.com/images/banners/2014-02-13_special-events.png" />
                </a>
              </div><!--end of .column-->
            </div>&nbsp;<!--end of .row-->

          </li>
        </ul>
      </li><!-- Books Ends -->


      <li class="has-dropdown"><!-- Computer Starts -->
        <a href="https://uofastore.com/computer" class="show-for-large-up">Computers</a><a class="show-for-medium-down">Computer</a>
        <ul class="dropdown m-menu">
          <li>
            <div class="row">

              <div class="medium-6 column">
                <h3>About Computer Store</h3>
                <ul>
                  <li>
                    <a href="https://uofastore.com/computer"><i class="icon-circle-right"></i>Computer Store Home</a>
                  </li>
                  <li>
                    <a href="https://uofastore.com/computer#rate"><i class="icon-circle-right"></i>Computer Store Services</a>
                  </li>
                  <li class="hide-for-small-only">
                    <a href="https://uofastore.com/computer#repair1"><i class="icon-circle-right"></i>We Fix iPhone/iPad</a>
                  </li>
                  <li>
                    <a href="https://uofastore.com/computer#trade"><i class="icon-circle-right"></i>Trade In</a>
                  </li>
                  <li class="hide-for-small-only">&nbsp;</li>
                </ul>
              </div><!--end of .column-->
              <div class="medium-6 column">
                <h3>Shop Computers and More</h3>
                <ul>
                   <li>
                    <a href="https://shop.uofastore.com/c-295-computers.aspx"><i class="icon-circle-right"></i>Shop Desktop, Laptop & Tablet</a>
                  </li>
                  <li>
                    <a href="https://shop.uofastore.com/c-294-computer-store.aspx"><i class="icon-circle-right"></i>Shop Printers & Hardware</a>
                  </li>
                  <li>
                    <a href="https://shop.uofastore.com/c-297-software.aspx"><i class="icon-circle-right"></i>Shop Software</a>
                  </li>
                  <li>
                    <form id="hdrSearchForm" method="GET" action="https://shop.uofastore.com/search.aspx?searchterm=">
                      <div class="large-9 medium-8 small-8 columns">
                        <input type="text" name="searchterm" id="hdrSearchKey" placeholder="Search Computers, Hardware, and Software" />
                      </div>
                      <div class="large-3 medium-4 small-4 columns">
                        <input type="submit" class="button expand" id="search_button" value="Search" style="margin-top: 10px;">
                      </div>
                    </form>
                  </li>
                  <li class="hide-for-small-only">&nbsp;</li>
                </ul>
              </div><!--end of .column-->
            </div><!--end of .row-->

            <div class="row">
              <div class="medium-12 column hide-for-medium-down">

                <a href="https://uofastore.com/computer" class="intro">
                  <!--<i class="icon-play"></i>-->
                  <center><img src="https://uofastore.com/computer/images/apple-dell.png" width="950" /></center>
                </a>
              </div><!--end of .column-->
              </div>&nbsp;<!--end of .row-->

          </li>
        </ul>
      </li><!-- Computer Ends -->


      <li class="has-dropdown"><!-- Supplies Start -->
        <a href="https://shop.uofastore.com/c-260-supplies.aspx" class="show-for-large-up">Supplies</a><a class="show-for-medium-down">Supplies</a>
        <ul class="dropdown m-menu">
          <li>
            <div class="row">
              <div class="medium-6 column">
                <h3 class="">Office / School Supplies</h3>
                <ul>

                  <li>
                  	<div class="row">
                    	<form id="hdrSearchForm" method="GET" action="https://shop.uofastore.com/search.aspx?searchterm=">
                        <div class="large-9 medium-8 small-8 columns">
                          <input type="text" name="searchterm" id="hdrSearchKey" placeholder="Search by Name, Keyword, or Brand" />
                        </div>
                        <div class="large-3 medium-4 small-4 columns">
                          <input type="submit" class="button expand" id="search_button" value="Search" style="margin-top: 10px;">
                        </div>
                      </form>
										</div>
                  </li>
                  <li class="hide-for-small-only">&nbsp;</li>

                </ul>

              </div><!--end of .column-->
              <div class="medium-6 column">

                <h3 class="hide-for-small-only">Office / School Supplies</h3>
                <ul>
                  <li>
                    <a href="https://uofastore.com/supply/"><i class="icon-circle-right"></i>Supplies Home</a>
                  </li>
                  <li>
                    <a href="https://shop.uofastore.com/c-260-supplies.aspx"><i class="icon-circle-right"></i>Shop Supplies</a>
                  </li>


                  <li class="hide-for-small-only">&nbsp;</li>

                </ul>

              </div><!--end of .column-->
            </div><!--end of .row-->

            <div class="row hide-for-medium-down"><!-- Shop Images -->
							<div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/art.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-690-art-supplies.aspx" class="shop2-button">Art Supplies</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/filing.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-707-mailing-filing.aspx" class="shop2-button">Mailing & Filing</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/pens.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-707-mailing-filing.aspx" class="shop2-button">Pens & Pencils</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/paper.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-710-paper-notebooks.aspx" class="shop2-button">Paper</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/furniture.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-708-office-furniture.aspx" class="shop2-button">Office Furniture</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/calculators.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-696-calculators.aspx" class="shop2-button">Calculators</a>
                  </div>
                </div><br />
              </div>









            <!--
              <div class="medium-6 column show-for-large-up">
                <a href="https://shop.uofastore.com" class="intro">
                  <img src="https://uofastore.com/images/uofabookstore/razorback_shop.png" />
                </a>
              </div>
              <!--
              <div class="medium-4 column show-for-large-up">
                <a href="https://uofastore.com/computer" class="intro">
                  <img src="https://uofastore.com/images/uofabookstore/uofa_computer.png" />
                </a>
              </div>

              <div class="medium-6 column show-for-large-up">
                <a href="https://uofastore.com/supplies" class="intro">
                  <img src="https://uofastore.com/images/uofabookstore/uofa_supplies.png" />
                </a>
              </div>
              -->
            </div>&nbsp;<!-- Shop Images End -->

          </li>
        </ul>
      </li><!-- Supplies End -->


      <li class="has-dropdown"><!-- Shop Starts -->
        <a href="https://shop.uofastore.com/c-88-apparel.aspx?sortby=PriceHighToLow" class="show-for-large-up">Razorback Shop</a><a class="show-for-medium-down">Razorback Shop</a>
        <ul class="dropdown m-menu">
          <li>
            <div class="row">
              <div class="medium-6 column">
                <h3 class="">Razorback Online Store</h3>
                <ul>
                  <li>
                    <a href="https://shop.uofastore.com/c-88-apparel.aspx"><i class="icon-circle-right"></i>Apparel</a>
                  </li>
                  <li>
                    <a href="https://shop.uofastore.com/c-208-gifts-accessories.aspx"><i class="icon-circle-right"></i>Gift / Accessories</a>
                  </li>
                  <li>
                    <a href="https://shop.uofastore.com/c-223-collections.aspx"><i class="icon-circle-right"></i>Collections</a>
                  </li>
                  <!--li>
                    <a href="https://shop.uofastore.com/c-680-holiday.aspx"><i class="icon-circle-right"></i>Holiday</a>
                  </li>
                  <li class="hide-for-small-only">&nbsp;</li-->
                </ul>
              </div><!--end of .column-->
              <div class="medium-6 column">
               <h3 class="hide-for-small-only">&nbsp;</h3>
                <ul>
                  <li>
                    <a href="https://shop.uofastore.com/default.aspx"><i class="icon-circle-right"></i>More on Razorback Shop</a>
                  </li>
                  <li>
                    <a href="https://uofastore.com/shopping/"><i class="icon-circle-right"></i>Gift Registry</a>
                  </li>
                  <li>
                  	<form id="hdrSearchForm" method="GET" action="https://shop.uofastore.com/search.aspx?searchterm=">
                        <div class="large-9 medium-8 small-8 columns">
                          <input type="text" name="searchterm" id="hdrSearchKey" placeholder="Search by Names, Keywords, or Brands" />
                        </div>
                        <div class="large-3 medium-4 small-4 columns">
                          <input type="submit" class="button expand" id="search_button" value="Search" style="margin-top: 10px;">
                        </div>
                      </form>
                  </li>
                  <li class="hide-for-small-only">&nbsp;</li>
                </ul>
              </div><!--end of .column-->
            </div><!--end of .row-->

            <div class="row hide-for-medium-down"><!-- Shop Images -->
							<div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/men.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-89-men.aspx" class="shop2-button">Men</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/women.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-104-women.aspx" class="shop2-button">Women</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/kids2.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-125-kids.aspx" class="shop2-button">Kids</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/gift1.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-208-gifts-accessories.aspx" class="shop2-button">Gift/Accessories</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/tailgating.png" />
                  <div class="shop-content"><br />

                    <a href="https://shop.uofastore.com/c-221-tailgating.aspx" class="shop2-button">Tailgating</a>
                  </div>
                </div><br />
              </div>
              <div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/cliniquenav.png" />
                  <div class="shop-content"><br />

                    <a href="https://uofastore.com/clinique/" class="shop2-button">Clinique</a>
                  </div>
                </div><br />
              </div>
              <!--div class="large-2 medium-2 columns">
                <div class="shop-wrapper">
                  <img src="https://uofastore.com/images/nav/catalog.png" />
                  <div class="shop-content"><br />

                    <a href="https://dynalog.catalogs.com/g2771/dynalog" target="_blank" class="shop2-button">Shopping Catalog</a>
                  </div>
                </div><br />
              </div-->








            <!--
              <div class="medium-6 column show-for-large-up">
                <a href="https://shop.uofastore.com" class="intro">
                  <img src="https://uofastore.com/images/uofabookstore/razorback_shop.png" />
                </a>
              </div>
              <!--
              <div class="medium-4 column show-for-large-up">
                <a href="https://uofastore.com/computer" class="intro">
                  <img src="https://uofastore.com/images/uofabookstore/uofa_computer.png" />
                </a>
              </div>

              <div class="medium-6 column show-for-large-up">
                <a href="https://uofastore.com/supplies" class="intro">
                  <img src="https://uofastore.com/images/uofabookstore/uofa_supplies.png" />
                </a>
              </div>
              -->
            </div>&nbsp;<!-- Shop Images End -->

          </li>
        </ul>
      </li><!-- Shop Ends -->


      <li class="has-dropdown"><!-- Graduation Starts -->
        <a href="https://uofastore.com/graduate" class="show-for-large-up">Graduation</a><a class="show-for-medium-down">Graduation</a>
        <ul class="dropdown m-menu">
          <li>
            <div class="row">
              <div class="large-4 medium-6 column show-for-large-up">
                <!-- <img src="https://uofastore.com/images/hours/uofa_bookstore_hours.png" /> -->
                 <div class="info-wrap">
                  <div class="info info-visible">
                    <h3>U of A Graduation</h3>
                    <p><a href="https://uofastore.com/graduate/"><img src="https://shop.uofastore.com/skins/Skin_1/images/grad/commencement2.png" /></a><br /></p>
                  </div>
                  <div class="info">
                    <h3>Alumni Association</h3>
                    <p><img src="https://uofastore.com/images/nav/alumni.png" /><br /></p>
                  </div>
                  <div class="info">
                    <h3>U of A Class Rings, Frames, and Accessories</h3>
                    <p><img src="https://uofastore.com/images/nav/jostens.png" /><br /></p>
                  </div>
                  <div class="info">
                    <h3>Desktop Uploma</h3>
                    <p><img src="https://uofastore.com/images/nav/uploma.png" /><br /></p>
                  </div>
                  <div class="info">
                    <h3>Forever Red Frames</h3>
                   <p><img src="https://uofastore.com/images/nav/forever.png" /><br /></p>
                  </div>
                  <div class="info">
                    <h3>Forever Red Frames</h3>
                   <p><img src="https://uofastore.com/images/nav/package.png" /><br /></p>
                  </div>
                </div><!-- .info-wrap -->


              </div><!--end of .column-->

              <div class=" large-4 medium-6 hide-for-small-only column">
              <h3>Students</h3>
                <ul class="is-hover">
                  <li><a href="https://www.arkansasalumni.org/s/1429/index.aspx?sid=1429&gid=1&pgid=922" target="_blank"><i class="icon-circle-right"></i>Alumni Association</a></li>
                  <li><a href="https://www.jostens.com/apps/store/customer/1002276/University-of-Arkansas/" target="_blank" /><i class="icon-circle-right"></i>Official U of A Class Rings, Frames</a></li>
                  <li><a href="https://www.uplomausa.com/university-arkansas/#.Vw05rGPlf8u" target="_blank" /><i class="icon-circle-right"></i>Desktop Uploma</a></li>
                  <li><a href="https://www.forever-red.com" target="_blank" /><i class="icon-circle-right"></i>Forever Red Frames</a></li>
                  <li><a href="https://www.jostens.com/apps/store/packageBrowse/1002276/University-of-Arkansas/Graduation-Announcements/colpga_1002276_17/CATALOG_COLLEGE/" target="_blank" /><i class="icon-circle-right"></i>U of A Announcement Package</a></li>
                  <li><a href="https://gradimages.com" target="_blank" /><i class="icon-circle-right"></i>Order Graduation Images</a></li>
                  <li><a href="https://www.jostens.com/apps/store/customer/1002276/University-of-Arkansas/" target="_blank"><i class="icon-circle-right"></i>Student Homeship Regalia Order</a></li>
                  <li>&nbsp;</li>
                  </ul>

              </div><!--end of .column-->
              <div class="large-4 medium-6 column">
              <h3>U of A Graduation 2018</h3>
                <ul>
                  <li><a href="https://uofastore.com/graduate"><i class="icon-circle-right"></i>Graduation Home</a></li>
                  <li><a href="https://registrar.uark.edu/graduation/commencement/" target="_blank" /><i class="icon-circle-right"></i>Commencement Instructions</a></li>
	              <li><a href="https://uofastore.com/graduate/faq.php" /><i class="icon-circle-right"></i>Graduation FAQ</a></li>
                  <!--
                  <li><a href="https://registrar.uark.edu/graduation/applying-to-graduate.php" target="_blank"><i class="icon-circle-right"></i>Apply Graduation</a></li>
                  -->
                  <li>&nbsp;</li>
                </ul>

              <h3>Faculty</h3>
              	<ul>
              		<li><a href="https://uofastore.com/grad_salute/faculty/index.php" target="" /><i class="icon-circle-right"></i>Rent Faculty Regalia</a></li>
                  <li><a href="https://www.jostens.com/educators/faculty-caps-gowns.html" target="_blank" /><i class="icon-circle-right"></i>Buy Faculty Regalia</a></li>
              		<li><a href="https://uofastore.com/graduation/special-orders-confirm.php" /><i class="icon-circle-right"></i>Departmental Special Order</a></li>
                  <li>&nbsp;</li>
                </ul>
              </div><!--end of .column-->
            </div><!--end of .row-->
          </li>
        </ul>
      </li><!-- Graduation Ends -->


      <li class="has-dropdown"><!-- More Starts -->
        <a href="https://uofastore.com/storehour" class="hide-for-medium">More</a><a class="show-for-medium-only"><img src="https://uofastore.com/images/mobile/menu.png" width="20" /></a>
        <ul class="dropdown m-menu">
          <li>
            <div class="row">
              <div class="medium-5 column hide-for-medium-down">
                <!-- <img src="https://uofastore.com/images/hours/uofa_bookstore_hours.png" /> -->
                <div class="info-wrap">
                  <div class="info info-visible">
                    <h3>U of A Bookstore</h3>
                    <p><img src="https://uofastore.com/storehours/images/uark_bookstore.png" /><br />
                    <a href="https://goo.gl/maps/iQgbvBFCsaM2" target="_blank">616 Garland Ave, Fayetteville, AR 72701</a>
                    </p>
                  </div>
                  <div class="info">
                    <h3>U of A Bookstore</h3>
                    <p><img src="https://uofastore.com/images/hours/uofa_bookstore_hours.png" style="filter:blur(1px);" /><br />
                    <a href="https://goo.gl/maps/iQgbvBFCsaM2" target="_blank">616 Garland Ave, Fayetteville, AR 72701</a>
                    </p>
                  </div>
                  <div class="info">
                    <h3>Razorback Shop Student Union</h3>
                   <p><img src="https://uofastore.com/storehours/images/union_hours2.jpg" /><br />
                    <a href="https://goo.gl/maps/mCAtHywiJtj" target="_blank">435 N Garland Avenue
  Fayetteville, Arkansas 72701</a>
                  </p>
                  </div>
                  <div class="info">
                    <h3>Razorback NWA Mall</h3>
                   <p><img src="https://uofastore.com/storehours/images/nwa-hours2.JPG" /><br />
                    <a href="https://goo.gl/maps/1xZ6MizcKJS2" target="_blank">4201 N Shiloh Dr, Fayetteville, AR 72703</a>
                  </p>
                  </div>
                  <div class="info">
                    <h3>Razorback Shop Promenade Mall</h3>
                   <p><img src="https://uofastore.com/storehours/images/pinnacle_hills.jpg" /><br />
                    <a href="https://goo.gl/maps/tByqpRqHcUs" target="_blank">2203 Promenade Blvd, Rogers, AR 72758</a>
                  </p>
                  </div>

                </div><!-- .info-wrap -->

              </div><!--end of .column-->

              <div class="large-4 medium-6 column">
                <h3>Hours & Locations</h3>
                <ul class="is-hover">
                  <li><a href="https://uofastore.com/storehour"><i class="icon-circle-right"></i>Bookstore Hours/Location</a></li>
                  <li><a href="https://uofastore.com/storehour/razorback_shop-union.php"><i class="icon-circle-right"></i>Union Hours/Location</a></li>
                  <li><a href="https://uofastore.com/storehour/razorback_shop-nwa.php"><i class="icon-circle-right"></i>NWA Mall Hours/Location</a></li>
                  <li><a href="https://uofastore.com/storehour/razorback_shop-promenade.php"><i class="icon-circle-right"></i>Promenade Mall Hours/Location</a></li>
                  <li><a href="https://uofastore.com/storehour/garland_center.php"><i class="icon-circle-right"></i>Garland Center Hours/Location</a></li>
                  <li class="hide-for-small-only">&nbsp;</li>
                </ul>
              </div><!--end of .column-->
              <div class="large-3 medium-6 column">
              	<h3>More</h3>
                <ul>
                  <li>
                    <a href="https://uofastore.com/storehour/contact.php"><i class="icon-circle-right"></i>Contact Us</a>
                  </li>
                  <li>
                    <a href="https://uofastore.com/customers/"><i class="icon-circle-right"></i>Customer Loyalty</a>
                  </li>
                  <li>
                    <a href="https://uofastore.com/donation/"><i class="icon-circle-right"></i>Donation Request</a>
                  </li>
                  <li>
                    <a href="https://uofastore.com/sustainable"><i class="icon-circle-right"></i>Sustainability</a>
                  </li>
                  <li>
                    <a href="https://uofastore.com/textbook/#bookstore-policy"><i class="icon-circle-right"></i>Policies</a>
                  </li>
                  <li class="hide-for-small-only">&nbsp;</li>
                </ul>
              </div><!--end of .column-->
			</div>
          </li>
        </ul>
      </li><!-- More Ends -->


      <li><!-- Search Starts -->
        <a href="https://uofastore.com/search.php"><img src="https://uofastore.com/images/uofabookstore/search.png"  width="16" class="show-for-medium-up" vspace="15" /><span class="show-for-small">Search</span></a>
      </li><!-- Search Endsd -->

    </ul>
  </section>
</nav>
</div>

<span class="show-for-large-up" style="padding-top:50px;"></span>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/js/foundation.min.js'></script>

      <script src="/update/include/index.js"></script>
      <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>

      <script src="/update/include/info-visible.js"></script>

<script>
    $(document).foundation();
</script>



<!-- New Website Intro
<script>
jQuery(document).ready(function($){

if (sessionStorage.getItem('myModal') !== 'true') {
$('body').append('<div id="myModal" class="reveal-modal-pop" data-reveal><a class="close-reveal-modal"><center><br /><img src="/../images/popup.png" class="desk_pop"><img src="/../images/popup_mobile.png" class="mobile_pop"></center></a></div>')
sessionStorage.setItem('myModal','true');
}

$('#myModal').on('click',function(){
$('#myModal').hide();
});

$('#reset-session').on('click',function(){
sessionStorage.setItem('myModal','');
});

});
</script>


<script>
$(document).foundation();
$(document).ready(function(){$('#myModal').foundation('reveal', 'open')});
</script>
--><sidebar class="nav-down" id="sidebar_mobile">
  <div class="bar">
      <p class="sidebar_title"><a href="https://uofastore.com/textbook/index.php">BOOKSTORE HOME</a></p>
      <ul class="right">
              <li><a href="https://shop.uofastore.com/t-textbookdisclaimer.aspx">Buy/Rent</a></li>
        <li><a href="#faq">Rental FAQ</a></li>
        <li><a href="https://uofastore.com/textbook/affordability.php#buyback">Textbook Buyback</a></li>
        <li><a href="https://uofastore.com/textbook/affordability.php">Textbook Affordability</a></li>
    	<li><a href="#bookstore-policy">Bookstore Policy</a></li>
        <li><a href="https://uofastore.com/adoptions/">Faculty Textbook Adoption</a></li>
		<li><a href="https://uofastore.com/textbook/schedule.php">Book List Instructions</a></li>
      </ul>
    </div>
</sidebar>


<div class="sidebar">
</div>


<div class="mobile-sidebar center"><center><a href="#" id="asearch" class="mobile-menu">TEXTBOOK MENU&ensp;<img src="https://uofastore.com/images/mobile/downarrow.png" width="30" /></a> </center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>
            $(document).ready(function(){
                $("a#asearch").click(function(){
                    $("div#search").toggle(300);
                });
            });
      </script>

    <div id="search" style="display:none;">
      <ul>
      	        <li><a href="https://uofastore.com/textbook/index.php">BOOKSTORE HOME</a></li>
      	<li><a href="https://shop.uofastore.com/textbookdisclaimer.aspx">Buy/Rent</a></li>
        <li><a href="https://uofastore.com/textbook/index.php#faq" id="asearch">Rental FAQ</a></li>
        <li><a href="https://uofastore.com/textbook/affordability.php#buyback">Textbook Buyback</a></li>
        <li><a href="https://uofastore.com/textbook/affordability.php">Textbook Affordability</a></li>
        <li><a href="https://uofastore.com/textbook#bookstore-policy">Bookstore Policy</a></li>
        <li><a href="https://uofastore.com/adoptions/">Faculty Textbook Adoption</a></li>
        <li><a href="https://uofastore.com/textbook/schedule.php">Book List Instructions</a></li>
      </ul>
    </div>
</div>

<div class="sidebar2">
</div>


<!--
<script>
// Hide sidebar on on scroll down
// Hide sidebar on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('sidebar').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('sidebar').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('sidebar').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}
</script>
-->
<!--
<div class="container-textbook">

<div class="bar">

</div>
</div>
-->

<a href="https://shop.uofastore.com/courselistbuilder.aspx"><img src="https://uofastore.com/images/banner/2017-08-04_BeatTheRush.png" alt="Order Textbooks" /></a>

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
  inlcude("includes/footer.php");
?>
