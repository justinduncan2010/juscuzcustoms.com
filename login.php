<?php
$pageTitle = 'Batchpad.com - Login';
include("db_connect.php");
include("header.php");

if(isset($_SESSION['url'])) 
   $url = $_SESSION['url']; // holds url for last page visited.
else 
   $url = "home.php"; // default page for 

?>
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Login</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
        
          <h1 class="heading1"><span class="maintext"> <i class="icon-signin"></i> Please Login</span></h1> 
          <div class="form-group">
          	<form method="post" action="">
          		<label class="control-label" >Username<span class="red">&nbsp;*</span></label>
          		<div class="controls">
          			<input name="username" id="username" type="text" placeholder="Username or Email"/>
          		</div>
          </div>
          <div class="form-group">
          	<label class="control-label" >Password<span class="red">&nbsp;*</span></label>
          		<div class="controls">
                	<input name="password" id="password" type="password" placeholder="Password"/>
                </div>
          </div>
          <div class="modal-footer">
          <?php 
			if(isset($_POST['submit']) && (!isset($_SESSION['logged_in']))) {
			// query to select all users/passwords
											$select_users = "SELECT * FROM users";
											$select_users_result = $mysqli->query($select_users);
											
										if($mysqli->error) {
												print "Select query error!  Message: ".$mysqli->error;
											}
										
											while($row = $select_users_result->fetch_object()) {
												if ((($_POST['username']) == ($row->username)) && (md5($_POST['password']) == ($row->password))) {
													// check if user input = a record in the database
													$_SESSION['logged_in']              = true;
													$_SESSION['logged_in_user']         = $row->username;
													$_SESSION['logged_in_firstname']    = $row->first_name;
													$_SESSION['logged_in_lastname']     = $row->last_name;
													$_SESSION['logged_in_user_id']      = $row->user_id;
													$_SESSION['logged_in_user_access']  = $row->access_level;
													$_SESSION['logged_in_email']        = $row->email;
													$_SESSION['logged_in_address1']     = $row->address1;
													$_SESSION['logged_in_address2']     = $row->address2;
													$_SESSION['logged_in_city']         = $row->city;
													$_SESSION['logged_in_state']        = $row->state;
													$_SESSION['logged_in_zip']          = $row->zip;
													$_SESSION['logged_in_telephone']    = $row->telephone;
													$_SESSION['logged_in_mobile']       = $row->mobile;
													$_SESSION['logged_in_company']      = $row->company;
												}
												 
												elseif((($_POST['username']) != ($row->username)) || (md5($_POST['password']) != ($row->password))){
												
												?>
                                                <h4 class="red">Sorry, Invalid username or password</h4>
												<?php break;
												}
											}
										}
										  if (isset($_SESSION['logged_in'])) {
    										header("Location: $url");
											}
										?>
                							<input action="action" type="button" class="btn btn-danger" value="Cancel" onclick="window.history.go(-1); return false;" />
                                            <input name="submit" id="submit" type="submit" class="btn btn-primary" value="Sign-in" />
                                            </form>
              							</div>
            					
        					
            <span id="error"></span>
          <div class="clearfix"></div>
          <br>
        </div>        
        <!-- Sidebar Start-->
        <aside class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"> <i class="icon-user"></i> Need Help?</span></h1>
            <ul class="nav nav-list categories">
              <li>
                <a href="#"> forgot your password?</a>
              </li>
              <li>
                <a href="about.php"> Privacy Policy</a>
              </li>
              <li>
                <a href="about.php">Why Sign up?</a>
              </li>
              <li>
                <a href="contact.php">Questions? Contact us!</a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>

<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-69797602-1', 'auto');
  ga('send', 'pageview');
</script>

<?php include('footer.php'); ?>