
<!DOCTYPE html>
<html>
<head>
	<title>I-tax portal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       <script src="bootstrap/js/jquery.min.js"></script>
       <script src="bootstrap/js/bootstrap.min.js"></script>
       <script src="js.js"></script>
       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		<link rel="stylesheet" href="/resources/demos/style.css">
  		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="index2.css"> 
		<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
<div class="head">
		<table align="right">
			<tr>
				<td style="color:#FFFFFF">Welcome to iTax Online Service Area&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
				<td style="color:#FFFFFF"><a href="#"><span class="label label-info">FAQs&nbsp</span></a></td>
				<td style="color:#FFFFFF"><a href="#"><span class="label label-info"> Forms&nbsp</span> </a></td>
				<td style="color:#FFFFFF"><a href="#"><span class="label label-info">Report Problem&nbsp</span></a></td>
				<td style="color:#FFFFFF"><a href="#"><span class="label label-info">Contact us&nbsp</span></a></td>
				<td style="color:#FFFFFF"><a href="#"><span class="label label-info">Online Help&nbsp</span></a></td>
				<td style="color:#FFFFFF"><a href="#"><span class="label label-info">iTax Videos</span></a></td>

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
		<table class="table table-bordered"> 
   <h2 align="center">Verify Witholding Certificate</h2>

   <tbody> 
      <tr> 
         <td>Type of Obligation:-
         	<select name="obligation" class="col">
         		<OPTION>X</OPTION>
         		<OPTION>X</OPTION>
         		
         	</select>
          </td> 
         <td>Payee Pin:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="pin" style="border-radius: 5px 5px 5px 5px"></td>
          
          
      </tr> 
      <tr> 
         <td>Witholding pin:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="pin" style="border-radius: 5px 5px 5px 5px"></td> 
          <td>Date of Certificate:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="pin" id="datepicker" style="border-radius: 5px 5px 5px 5px"></td>
          
      </tr> 
      <tr> 
         <td>Witholding Certificate no:-&nbsp&nbsp-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="pin" style="border-radius: 5px 5px 5px 5px"></td> 
      </tr>
          </tbody>  
</table>
		<div class="form-group">
			<div class="text-center">
				<button class="btn btn-success"><span class="glyphicon glyphicon-pencil">Reset</span></button>
				<button class="btn btn-info">Consult</button>
				<button class="btn btn-default"><span class="badge">Home</span></button>
			</div>
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