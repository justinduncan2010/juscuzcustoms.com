<?php include_once('header.php'); ?>
    <div id="categorymenu">
        <nav class="subnav">
            <ul class="nav-pills categorymenu container">
                <li><a href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a href="catalog.php">Shop</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">Contact Us</a> </li>
                <li class="pull-right">
                	<form action="search.php" method="post" class="form-search top-search">
                        <input type="text" name="search" class="input-small search-query" placeholder="Search Here…">
                        <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
<?php if(!isset($_SESSION['logged_in'])){ ?>
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Register Account</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
          <h1 class="heading1"><span class="maintext"> <i class="icon-signin"></i> Register Account</span></h1>
          <form class="form-horizontal form-custom" name="register" id="register" method="post">
            <h3 class="heading3">Your Personal Details</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label for="first" class="control-label"><span class="red">*</span> First Name</label>
                  <div class="controls">
                    <input required name="firstname" id="firstname" type="text"  class="">
                    <span id="hint1"></span>
                  </div>
                </div>
                <div class="control-group">
                  <label for="last" class="control-label"><span class="red">*</span> Last Name</label>
                  <div class="controls">
                    <input required name="lastname" type="text" id="latname"  class="">
                  <span id="hint2"></span>
                  </div>
                </div>
                <div class="control-group">
                  <label for="email" class="control-label"> E-mail Address</label>
                  <div class="controls">
                    <input name="email" type="email" id="email" class="">
                  <span id="hint3"></span>
                  </div>
                </div>
                <div class="control-group">
                  <label for="telephone" class="control-label"> Telephone</label>
                  <div class="controls">
                    <input name="telephone" type="number" id="telephone"  class="">
                  <span id="hint4"></span>
                  </div>
                </div>
                <div class="control-group">
                  <label for="mobile" class="control-label"> Mobile</label>
                  <div class="controls">
                    <input name="mobile" type="number" id="mobile"  class="">
                    <span id="hint5"></span>
                  </div>
                  
                </div>
                <div class="control-group">
                	<label for="company" class="control-label"> Company</label>
                <div class="controls">
                    <input name="company" type="text" id="company"  class="">
                </div>
                </div>
              </fieldset>
            </div>
            <h3 class="heading3">Your Address</h3>
            <div class="registerbox">
              <fieldset>
              <div class="control-group">
                  <label for="address1" class="control-label"> Address1</label>
                  <div class="controls">
                    <input name="address1" type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label for="address2" class="control-label"> Address2</label>
                  <div class="controls">
                    <input name="address2" type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label for="city" class="control-label"> City</label>
                  <div class="controls">
                    <input name="city" type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                    <label for="state" class="control-label"> State</label>
                <div class="controls">
                    <input name="state" type="text"  class="">
                </div>
                </div>
                <div class="control-group">
                	<label for="zip" class="control-label"> Zip</label>
                <div class="controls">
                    <input name="zip" type="text"  class="">
                </div>
                </div>  
              </fieldset>
            </div>
            <h3 class="heading3">Your Login Information</h3>
            <div class="registerbox">
              <fieldset>
              <div class="control-group">
                  <label for="username" class="control-label"><span class="red">*</span> Username</label>
                  <div class="controls">
                    <input name="username" type="text"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label for="password" class="control-label"><span class="red">*</span> Password</label>
                  <div class="controls">
                    <input required name="password" type="password"  class="">
                  </div>
                </div>
                <div class="control-group">
                  <label for="password" class="control-label"><span class="red">*</span>Confirm Password</label>
                  <div class="controls">
                    <input required name="password" type="password"  class="">
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="pull-right"
              <label class="checkbox inline">
                <input name="checkbox" id="checkbox" type="checkbox" onClick="validateData()"/>
              </label>
              I have read and agree to the <a href="policies.php" >Privacy Policy</a>
              &nbsp;
              <input type="submit" name="submit" id="button" class="btn btn-orange" value="Register">
            </div>
          </form>
          <div class="clearfix"></div>
          <br>
        </div>        
        <!-- Sidebar Start-->
        <aside class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"> <i class="icon-user"></i> Sign Up</span></h1>
            <ul class="nav nav-list categories">
              <li>
              <b>Don't remember your Password?</b>
                <a href="contact.php">Contact us</a>
              </li>
              <li>
                <b>Why Sign up? because you'll probably be back, in fact, we guaruntee you'll love us...</b><a href="about.php">Learn more...</a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>
<?php } ?>
<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-69797602-1', 'auto');
  ga('send', 'pageview');
</script>

<?php 
require('validate.php');
include('footer.php'); 
?>