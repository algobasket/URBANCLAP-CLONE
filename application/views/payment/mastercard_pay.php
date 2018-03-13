
       <script src="https://test-gateway.mastercard.com/checkout/version/40/checkout.js"
               	 data-error="errorCallback"
               	 data-cancel="cancelCallback"
                 data-complete="<?php echo base_url();?>account/mastercardPaymentReceipt"
                >
       </script>

       <script type="text/javascript">
            function errorCallback(error) {
                  alert(JSON.stringify(error));
            }

            function completeCallback(resultIndicator, sessionVersion) {
                  alert("Result Indicator");
				  				alert(JSON.stringify(resultIndicator));
                  alert("Session Version:");
				  				alert(JSON.stringify(sessionVersion));
				  				alert("Successful Payment");
            }

            function cancelCallback() {
                  alert('Payment cancelled');

            }


						Checkout.configure({
    					merchant   : <?php echo $merchantID; ?>,
    					order      : {
        				amount     : <?php echo json_encode($order_amount); ?>,
        				currency   : <?php echo json_encode($order_currency); ?>,
        				description: 'Secure Payment Page',
        				id				 : <?php echo json_encode($order_id); ?>,
        				item			 : {
        					brand: 'Mastercard',
        					description: 'Hosted Checkout Test Item - Return to Merchant - PHP/JavaScript/NVP',
        					name: 'HostedCheckoutItem',
        					quantity: '1',
        					unitPrice: '1.00',
        					unitTaxAmount: '1.00'
        				}
            	},
    					billing    : {
    						address  : {
    							street: '3 Adelaide Street',
    							stateProvince: 'QLD',
    							city: 'Brisbane',
    							company: 'Mastercard Pty Ltd',
    							postcodeZip: '4000',
    							country: 'AUS'
    						}
    					},
    					customer :{
    						email: <?php echo $customer_receipt_email; ?>
    				  },
    					interaction: {
        				merchant: {
            		name: 'Jon Test Merchant for Hosted Checkout',
            			//address: {
            				//line1: '300 Adelaide Street',
            				//line2: 'Brisbane Queensland 4000'
        					//},
        					  logo:  'https://www.albemarle-london.com/OnlineBooking/Albemarle/ShowPics/ALBAniv.png'
        				},
						displayControl: {
						billingAddress  : 'HIDE',
						customerEmail   : 'HIDE',
						shipping        : 'HIDE'
        }
    					},
    					session: {
            			id: <?php echo json_encode($session_id); ?>
       						}
						});

        </script>



       <?php if($section == "submitPayment"){ ?> 
    		<p style="text-align:center;">
          <a href="../index.html"><img src="https://c.ap1.content.force.com/servlet/servlet.ImageServer?id=01590000008h62j&oid=00D90000000sUDO" alt="Main Order Home Page" /></a>
        </p>

        <br><br><br><br>
        <h1 align="center">Checkout</h1>
        <h2 align="center"> <u>Order Summary</u></h2>
        <p style="text-align:center;"> <strong> Order Amount : $<?php if (isset($order_amount)) echo $order_amount ?></p>
        <p style="text-align:center;"> Currency &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <?php
          if(isset($order_currency)){
            echo $order_currency;
          } ?>
        </strong> </p>
        <br>


        <p style="text-align:center;"><input type="button" value="Pay with Lightbox" onclick="Checkout.showLightbox();" /></p>
        <p style="text-align:center;"><input type="button" value="Pay with Payment Page" onclick="Checkout.showPaymentPage();" /></p>

        <p style="text-align:center;"><a href= "http://localhost/MPGS/HC/index.html"><br><br><input type="button" value="Cancel Payment and Return to Main Index Page" /></a></p>
     <?php } ?>
