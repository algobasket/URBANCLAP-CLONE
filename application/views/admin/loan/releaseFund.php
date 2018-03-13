<style>
.text-danger strong {
    		color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}

		#container {
			background-color: #dcdcdc;
		}
</style>

<?php foreach($loanDetail as $loan){} ?>
<?php echo form_open('admin/loan/releaseFund/'.$this->uri->segment(4));?>
<?php echo form_hidden('loan_amount',$loan['loan_amount']);?>
<?php echo form_hidden('loan_amount_receiver',$loan['user_id']);?>
<?php echo form_submit('release_amount','Release Amount','class="btn btn-success"');?>
<?php echo form_close();?>
<div class="container">
	<div class="row">
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="receipt-left">
							<img class="img-responsive" src="<?php echo base_url();?>QR_CODES/<?php echo $loan['qrcode'];?>" style="width: 71px; border-radius: 43px;">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-right">
						<div class="receipt-right">
							<h5><?php echo $this->settings->site_name; ?>.</h5>
							<p><?php echo $this->settings->site_phone; ?> <i class="fa fa-phone"></i></p>
							<p><?php echo $this->settings->site_email; ?> <i class="fa fa-envelope-o"></i></p>
							<p>Skype <?php echo $this->settings->site_skype; ?><i class="fa fa-location-arrow"></i></p>
						</div>
					</div>
				</div>
            </div>

			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<h5><?php echo $loan['first_name'];?> <?php echo $loan['last_name'];?></h5>
							<p><b>Mobile :</b> <?php echo $loan['phone'];?></p>
							<p><b>Email :</b> <?php echo $loan['email'];?></p>
							<p><b>Address :</b> Australia</p>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h1>Loan</h1>
						</div>
					</div>
				</div>
            </div>

            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td >Loan ID</td>
                          <th></i> #<?php echo $loan['loanExternalID'];?></th>
                      </tr>
                        <tr>
                            <td >Principle Loan Amount</td>
                            <td><i class="fa fa-usd"></i> <?php echo $loan['loan_amount'];?>/-</td>
                        </tr>
                        <tr>
                            <td>Loan Tenure Period</td>
                            <td> <?php echo $loan['time'];?> Years</td>
                        </tr>
                        <tr>
                            <td>Interest Rate(%)</td>
                            <td> <?php echo $loan['interest'];?></td>
                        </tr>
                        <tr>
                            <td>Interest Amount</td>
                            <td><i class="fa fa-usd"></i> <?php echo $loan['interest_amount'];?>/-</td>
                        </tr>
                        <tr>
                            <td class="text-right">
                            <p>
                                <strong>Principle + Interest: </strong>
                            </p>
                            <p>
                                <strong>Late Fees: </strong>
                            </p>
							<p>
                                <strong>Payable Amount: </strong>
                            </p>

							</td>
                            <td>
                            <p>
                                <strong><i class="fa fa-usd"></i> <?php echo $loan['loan_amount'];?>/- + <i class="fa fa-usd"></i><?php echo $loan['interest_amount'];?>/-</strong>
                            </p>
                            <p>
                                <strong><i class="fa fa-usd"></i> 0/-</strong>
                            </p>
							<p>
                                <strong><i class="fa fa-usd"></i> <?php echo $loan['total_amount'];?>/-</strong>
                            </p>
							</td>
                        </tr>
                        <tr>

                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><i class="fa fa-usd"></i> <?php echo $loan['total_amount'];?>/-</strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>

			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<h5 style="color: rgb(140, 140, 140);">Thank you for your business!</h5>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h1>Signature</h1>
						</div>
					</div>
				</div>
            </div>

        </div>
	</div>

</div>
