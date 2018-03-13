<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	
	<link rel="stylesheet" type="text/css" href="./assets/paymentstyle.css" />
	
	<head>
		<title>API Example Code</title>
		<meta http-equiv="Content-Type" content="text/html, charset=iso-8859-1">  
	</head>
	
	<body>
    	
    	<h1>API: REST (JSON)</h1>
    	<h3>PHP Example Code Set</h3>
    <br/>
    <div style="width:60%;position:absolute;left:20%">
    	<p>This set contains working example code to help you integrate your application into the payment gateway. Below are the transaction types covered in this example.</p>
    <table align="center">
    	<tr>
    		<td height="40" width="25%"><strong><a href="x_authorize_simple.html">Simple Authorize</a></strong><br/>x_authorize_simple.html</td>
    		<td style="padding-bottom:5px">Simple authorization transaction. Includes only basic fields like Card Number, Expiry, Card Security Code, Amount, Currency, IP Address and Order & Transaction References. Requires merchant to specify Order & Transaction IDs.</td>
    	</tr>
    	<tr>
    		<td height="40" width="25%"><strong><a href="x_pay_simple.html">Simple Pay</a></strong><br/>x_pay_simple.html</td>
    		<td style="padding-bottom:5px">Simple pay (aka purchase) transaction. Includes only basic fields like Card Number, Expiry, Card Security Code, Amount, Currency, IP Address and Order & Transaction References. Requires merchant to specify Order & Transaction IDs.</td>
    	</tr>
    	<tr>
    		<td height="40" width="25%"><strong><a href="x_capture_simple.html">Simple Capture</a></strong><br/>x_capture_simple.html</td>
    		<td style="padding-bottom:5px">Captures against an existing Order. Includes the Amount and Currency as well as requiring the merchant to specify the Transaction ID for the capture and the Order ID created from the initial authorisation operation.</td>
    	</tr>
    	<tr>
    		<td height="40" width="25%"><strong><a href="x_refund_simple.html">Simple Refund</a></strong><br/>x_refund_simple.html</td>
    		<td style="padding-bottom:5px">Refunds against an existing Order. Includes the Amount and Currency as well as requiring the merchant to specify the Transaction ID for the refund and the Order ID created from the initial authorisation or pay operation.</td>
    	</tr>
		<tr>
    		<td height="40" width="25%"><strong><a href="x_void_simple.html">Simple Void</a></strong><br/>x_void_simple.html</td>
    		<td style="padding-bottom:5px">Voids a previous transaction. Requires the merchant to specify the Transaction ID and Order ID of the transaction to void. Includes basic fields like Transaction Reference.</td>
    	</tr>
        <tr>
            <td height="40" width="25%"><strong><a href="x_verify_simple.html">Simple Verify</a></strong><br/>x_verify_simple.html</td>
            <td style="padding-bottom:5px">Performs a card verification transaction. Includes only basic fields like Card Number, Expiry, Card Security Code, Currency and Order & Transaction References. Requires merchant to specify Order & Transaction IDs.</td>
        </tr>
        <tr>
            <td height="40" width="25%"><strong><a href="x_initiate_simple.html">Simple Initiate Browser Payment</a></strong><br/>x_initiate_simple.html</td>
            <td style="padding-bottom:5px">Initiates a browser payment, for example, PAYPAL. Requires you to specify the amount, currency, and the return URL (the URL to which the payer's browser is redirected on completing the payment at the payment provider's website).
                With PayPal, you must also specify the operation and the payment confirmation flow.</td>
        </tr>
        <tr>
            <td height="40" width="25%"><strong><a href="x_confirm_simple.html">Simple Confirm Browser Payment</a></strong><br/>x_confirm_simple.html</td>
            <td style="padding-bottom:5px">Confirms a successfully initiated browser payment. Requires you to specify the amount and currency.</td>
        </tr>
        <tr>
            <td height="40" width="25%"><strong><a href="x_update_authorization_simple.html">Simple Authorization Update</a></strong><br/>x_update_authorization_simple.html</td>
            <td style="padding-bottom:5px">Updates an existing authorization. If successful, the authorization period of the existing authorization is extended and/or the authorization amount is updated.</td>
        </tr>
        <tr>
            <td height="40" width="25%"><strong><a href="x_retrieve_transaction_simple.html">Simple Retrieve Transaction</a></strong><br/>x_retrieve_transaction_simple.html</td>
            <td style="padding-bottom:5px">Retrieves the details of a transaction. The order ID and transaction ID must identify the transaction you wish to retrieve the details for.</td>
        </tr>
    </table>
		<br/><br/>
			<div>
		    <h3>How to Use this Example Code</h3>
		    <ol>
		    	<li>Move the contents of this directory into a location in your webservers root directory</li>
		    	<li>Edit configuration.php in your IDE or text editor to setup the configuration</li>
		    	<li>Access this index page, on your webserver, through a web browser</li>
		    	<li>Select a transaction type and fill in the applicable fields to process a payment</li>
		    </ol>
		    <p style="text-align:left">Once you have the example code successfully working, you can begin to integrate your application into the API. This example set is designed to simplify your integration requirements. In many cases, you can use the configuration and connection files with no changes. You can then customize your own receipt and customer data entry pages to match your needs. Finally, the process file can be used as a basis for your own version. You should at a minimum modify this process file to calculate field values not entered by the customer (as described in Best Practices below).</p>
			</div>
			<div>
		    <h3>How this Example Code Works</h3>
		    <center><img src="./assets/SampleCodeInfoFlow.gif"></center>
		    <p style="text-align:left">These examples are designed to give you a working sample of all major transaction operations supported through the API. All the example code is fully commented to give you an understanding of how it works and how to use the examples with your integration. The following files and folders can be found in this example set:<br/></p>
		   
		   <table width="80%" align="center">
	    	<tr>
	    		<td height="40" width="35%"><strong>/assets/*</strong></td>
	    		<td style="padding-bottom:5px">JavaScript and CSS files that are used for display purposes only. These are not required by your integration.</td>
	    	</tr>
	    	<tr>
	    		<td height="40" width="35%"><strong>/configuration.php</strong></td>
	    		<td style="padding-bottom:5px">This file holds configuration data for some of the sensitive fields required for your integration. These specific fields need to be stored securly in your integration and never exposed to the customer.</td>
	    	</tr>
	    	<tr>
	    		<td height="40" width="35%"><strong>/connection.php</strong></td>
	    		<td style="padding-bottom:5px">This file is reponsible for sending and receiving the transaction. It initiates the connection and also has several other functions that are useful to simplify your integration efforts.</td>
	    	</tr>
	    	<tr>
	    		<td height="40" width="35%"><strong>/index.html</strong></td>
	    		<td style="padding-bottom:5px">This page. Contains general info and instructions for how to use this example set. This page would never be used in your integration.</td>
	    	</tr>
	    	<tr>
	    		<td height="40" width="35%"><strong>/process.php</strong></td>
	    		<td style="padding-bottom:5px">This file receives the POST from the x_[transaction_type].html page, processes the POST body and then uses connection.php to send the transaction. When the response from the transaction is received, it processes the response and then includes receipt.php to display the result. In your integration, it would be in the equivalent file that you would calculate and set data fields that are not customer facing, and are required to process a transaction.</td>
	    	</tr>
	    	<tr>
	    		<td height="40" width="35%"><strong>/receipt.php</strong></td>
	    		<td style="padding-bottom:5px">This file displays the result of the transaction. In your integration, you would need to substitute this page's function for your own receipt page to display to the customer.</td>
	    	</tr>
	    	<tr>
	    		<td height="40" width="35%"><strong>x_[transaction_type].html</strong></td>
	    		<td style="padding-bottom:5px">All files starting with x_ are specific to a transaction type/operation. These HTML files contain a form field which submits a POST to process.php. In your integration, it would be an equivalent page that the customer enters their payment details.</td>
	    	</tr>
	    </table> 
			</div>
		
			<br/><br/>
			<div>
		    <h3>Best Practices</h3>
		    <p style="text-align:left">These examples make most transaction fields available to edit when submitting the transaction. This is intended for this example only to simplify the process. In your integration, the only fields you should ever display to the customer are those requiring the customer to enter data. All other fields should be generated in your code (process.php in this example) and not be available to the customer.</p>
		  	
		  	<p style="text-align:left">In line with the above, you should never use HTML hidden fields to submit data to be used in the transaction request. Instead, you should specify and set these values within your application code (i.e. process.php based on this example)</p>
		  	
		  	<p style="text-align:left">For more best practices and tips, make sure to read the complete list in the Integration Guidelines, located under "How to Integrate".</p>
			</div>
			<br/><br/><br/><br/>
		</div>
		
    </body>
</html>
