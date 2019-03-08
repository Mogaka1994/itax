
<!DOCTYPE html>
<html>
<head>
	<title>I-tax portal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       <script src="bootstrap/js/jquery.min.js"></script>
       <script src="bootstrap/js/bootstrap.min.js"></script>
       <script src="js.js"></script>
		<link rel="stylesheet" type="text/css" href="index2.css"> 
</head>
<body>
<div class="head">
		<table align="right">
			<tr>
				<td style="color:#FFFFFF">Welcome to iTax Online Service Area&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
				<td style="color:#FFFFFF"><a href="https://itax.kra.go.ke/KRA-Portal/faq.htm?actionCode=faqManagement&operation=viewCategory&viewType=static
"><span class="label label-info">FAQs&nbsp</span></a></td>
				<td style="color:#FFFFFF"><a href="https://itax.kra.go.ke/KRA-Portal/postQuery.htm?actionCode=showPostQuery&viewType=static
"><span class="label label-info"> Forms&nbsp</span> </a></td>
				<td style="color:#FFFFFF"><a href="#"><span class="label label-info">Report Problem&nbsp</span></a></td>
				<td style="color:#FFFFFF"><a href="#"><span class="label label-info">Contact us&nbsp</span></a></td>
				<td style="color:#FFFFFF"><a href="#"><span class="label label-info">Online Help&nbsp</span></a></td>
				<td style="color:#FFFFFF"><a href="https://itax.kra.go.ke/KRA-Portal/main.htm?actionCode=displayChildMenus&&parentMenuId=ITAX%20Videos&&menyType=HOMELINK
"><span class="label label-info">iTax Videos</span></a></td>

			</tr>
		</table>
	</div>
	<!--<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome to iTax Online Service Area</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">FAQs|</a></li>
      <li><a href="#">Forms|</a></li>
      <li><a href="#">Report Problem|</a></li>
      <li><a href="#">Contact Us|</a></li>
      <li><a href="#">Online Help|</a></li>
      <li><a href="#">iTax Videos|</a></li>
    
    </ul>
  </div>
</nav>-->
<div class="nav">
	<img src="head.jpg" width="951" height="115">
</div>
	<div class="body">
		<div class="float1">
			<strong><h4 align="center"id="s">Do you have a Pin?</small></h4></strong>
			<form id="form" method="post" action="">
				<br>
				<fieldset>
					&nbsp<label for="pin" align="center">Enter PIN/User ID*</label>
					<input type="text" name="PIN" id="pin"          onchange="Function()"><br><br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button"  value="Continue" class="btn btn-danger" id="myBtn">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:20px 35px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="https://itax.kra.go.ke/KRA-Portal/eRegIndi.htm
">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
</div>
      
    </div>
  </div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script><br><br>
				</fieldset>
			</form>
			<strong><h4 align="center" id="s">Do you want to apply for a PIN?</h4></strong>
			<table>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp<img src="Register_Icon3_50.png"></td>
					<td>New PIN registration<br>
					<span class="s">To get PIN<a href="#"><input type="button"  value="Click here" class="btn btn-info"></a></span></td><hr>

				</tr>
				</table>
					<h6 align="right">Guidelines for PIN Registration</h6>
		
			<strong><h4 align="center"id="s">Manufacturer Authorization</h4></strong>
			<table>
				<tr>
					<td>&nbsp&nbsp&nbsp&nbsp<img src="Register_Icon3_50.png"></td>
					<td>Manufacturer Authorization<br>
					<span class="s">To authorize<a href="#"><input type="button"  value="Click here" class="btn btn-info"></a></span>

				</tr>
			</table>
			
		</div>
		<div class="float">
			<strong><h4 align="left"id="s">iTax online eservices</h4></strong>
		<table align="center">
			<tr>
					<td><div class="btn-group">
  						<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pin Checker <span class="caret"></span>
  							</button>
  						<ul class="dropdown-menu">
    					<li><a href="pin_checker.php">Click To Verify</a></li></ul>
				    </div></td>
				<td><div class="btn-group">
  						<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TCC Checker <span class="caret"></span>
  							</button>
  						<ul class="dropdown-menu">
    					<li><a href="tcc_checker.php">Click To Verify</a></li></ul>
				    </div></td>
				<td><div class="btn-group">
  						<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WHT Checker <span class="caret"></span>
  							</button>
  						<ul class="dropdown-menu">
    					<li><a href="wht_checker.php">Click To Verify</a></li></ul>
				    </div></td>
			</tr>
		</table><br><br>
		<table align="center">
			<tr>
				<td><strong>Status Checker</strong><br><small>To check the status of your application <a href="#"> <br><button  type="button" class="btn btn-info">Click here</button></a></small></td>
				<td><strong>Agent Checker</strong><br><small>To verify witholding agent <a href="#"> <br><button  type="button" class="btn btn-info">Click here</button></a></small></td>
			</tr>
			<tr>
				<td><strong>Serial Number Checker<strong></strong><br><small>To verify middleware serial number <a href="#"><br> <button  type="button" class="btn btn-info">Click here</button></a></small></td>
				<td><strong>Invoice Number Checker</strong><br><small>To verify middleware invoice number <a href="#"><br> <button  type="button" class="btn btn-info">Click here</button></a></small></td>
			</tr>
		</table><br><br><br>
	<h4 id="s" align="center">Need Assistance?</h4>
	<table>
		<tr>
			<td><img src="contact_us.PNG">&nbsp&nbspContact Us</a></td>
			<td><img src="report_problem.PNG">&nbsp&nbspReport Problem</a></td>
			<td><a href="https://itax.kra.go.ke/KRA-Portal/faq.htm?actionCode=faqManagement&operation=viewCategory&viewType=static
"><img src="faqs.PNG">&nbsp&nbspFAQs</a></td>
			<td><img src="online_help.PNG">&nbsp&nbspOnline Help</a></td>
		</tr>
	</table>
	</div>
	</div>
	
	<div class="footer">
		<img src="footer.png" width="951" height="95">
	</div>
	<?php include_once('c.php');?>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/5a8dc40d4b401e45400d1b13/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
<!--End of Tawk.to Script-->
</body>
</html>