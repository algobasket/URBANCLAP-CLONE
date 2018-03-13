

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <link rel="stylesheet" type="text/css" href="assets/paymentstyle.css" />
    <head>
      <title>DirectApi Example</title>
      <meta http-equiv="Content-Type" content="text/html, charset=iso-8859-1">
    </head>

    <body>

		<p style="text-align:center;"><a href="./index.html"><img src="https://c.ap1.content.force.com/servlet/servlet.ImageServer?id=01590000008h62j&oid=00D90000000sUDO" alt="Main Order Home Page" /></a></p>
    <center><h1><br/><u>Payment Receipt Page</u></h1></center>


<?php

if (strcmp($resultInd, $successInd) == 0)
	{
?>
		 <tr class="title">
             <td colspan="2" height="25"><P><strong>&nbsp;</strong></P></td>
         </tr>
         <tr>
             <td align="right" width="50%"><strong><center><h1>Your Payment was successful!</h1></center></strong></td>
         </tr>
<?php

	}
	else
	{
?>

	<tr class="title">
             <td colspan="2" height="25"><P><strong>&nbsp;</strong></P></td>
         </tr>
         <tr>
             <td align="right" width="50%"><strong><center><h1>Your Payment was Unsuccessful!</h1></center></strong></td>
         </tr>
<?php
	}
?>


  <table width="60%" align="center" cellpadding="5" border="0">

  <?php
    // echo HTML displaying Error headers if error is found
    if ($errorCode != "" || $errorMessage != "") {
  ?>
      <tr class="title">
             <td colspan="2" height="25"><P><strong>&nbsp;Error Response</strong></P></td>
         </tr>
         <tr>
             <td align="right" width="50%"><strong><i><?=$errorCode?>: </i></strong></td>
             <td width="50%"><?=$errorMessage?></td>
         </tr>
  <?php
    }
    else {
  ?>
      <tr class="title">
             <td colspan="2" height="25"><P><strong>&nbsp;<?=$gatewayCode?></strong></P></td>
         </tr>

  <?php
     }
  ?>

  </table>

  <br/><br/>
		<h2 align="center"><a href="http://localhost/MPGS/HC/index.html">Page will redirect in 3 sec</a></h2>
    </body>
    <script>
    window.setTimeout(function(){
      // Move to a new location or you can do something else
      window.location.href = "<?php echo base_url();?>account/deposit";  
  }, 5000);
    </script>
<html>
