/*
  ** Create Coupon Form 
*/  
<?php if($isCreateCoupon == true): ?>
<?php echo form_open('custom/createCoupon');?>
<table class="table">
	<tr>
		<td>Coupon Name</td>
		<td><input type="text" name="couponName" /></td>
	</tr> 
<tr>
		<td>Coupon Type</td>
		<td>
			<select name="couponType">
				<option>Coupon Type</option>
				<option value="specialCoupon">Special Coupon</option>
				<option value="deluxeCoupon">Deluxe Coupon</option>
				<option value="premiumCoupon">Premium Coupon</option>
				<option value="luxuryCoupon">Luxury Coupon</option>
			</select>
		</td>
	</tr>
<tr>
		<td>Start Date</td>
		<td>
			<input type="text" name="couponStartDate" placeholder="dd-mm-YY" />
		</td>
	</tr>
	<tr>
		<td>Expiry Date</td>
		<td>
			<input type="text" name="couponStartDate" placeholder="dd-mm-YY" />
		</td>
	</tr>
	<tr>
		<td>Amount</td>
		<td>
			<input type="text" name="couponAmount" placeholder="Coupon Amount" />
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" name="createCoupon" value="createCoupon" />
		</td>
	</tr>

</table>
<?php echo form_close();?>
<?php endif ?>

/*
  ** Update Coupon Form 
*/  

<?php if($isUpdateCoupon == true): ?>
<?php foreach($singleCoupon as $coupon){} ?>	
<?php echo form_open('custom/updateCoupon');?>
<table class="table">
	<tr>
		<td>Coupon Name</td>
		<td><input type="text" name="couponName" value="<?php echo $coupon['couponName'];?>" /></td>
	</tr>
<tr>
		<td>Coupon Type</td>
		<td>
		<select name="couponType">
		<option >Coupon Type</option>
		<option <?php echo ($coupon['couponType'] == "specialCoupon") ? "selected":"" ?> value="specialCoupon">Special Coupon</ption>
		<option <?php echo ($coupon['couponType'] == "deluxeCoupon") ? "selected":"" ?> value="deluxeCoupon">Deluxe Coupon</option>
		<option <?php echo ($coupon['couponType'] == "premiumCoupon") ? "selected":"" ?> value="premiumCoupon">Premium Coupon</option>
		<option <?php echo ($coupon['couponType'] == "luxuryCoupon") ? "selected":"" ?> value="luxuryCoupon">Luxury Coupon</option>
		</select>
		</td>
	</tr>
<tr>
		<td>Start Date</td>
		<td>
			<input type="text" name="couponStartDate" placeholder="dd-mm-YY" value="<?php echo $coupon['couponStartDate'];?>" />
		</td>
	</tr>
	<tr>
		<td>Expiry Date</td>
		<td>
			<input type="text" name="couponExpiryDate" placeholder="dd-mm-YY" value="<?php echo $coupon['couponExpiryDate'];?>" />
		</td>
	</tr>
	<tr>
		<td>Amount</td>
		<td>
			<input type="text" name="couponAmount" placeholder="Coupon Amount" value="<?php echo $coupon['couponAmount'];?>" />
		</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>
		<select name="couponStatus">
		<option <?php echo ($coupon['couponStatus'] == "available") ? "selected":"" ?> value="available">Available Coupon</ption>
		<option <?php echo ($coupon['couponStatus'] == "used") ? "selected":"" ?> value="used">Used Coupon</option>
		<option <?php echo ($coupon['couponStatus'] == "expired") ? "selected":"" ?> value="expired">Expired Coupon</option>
		<option <?php echo ($coupon['couponStatus'] == "deactive") ? "selected":"" ?> value="deactive">Deactive Coupon</option>
		</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" name="updateCoupon" value="createCoupon" />
		</td>
	</tr>

</table>
<?php echo form_close();?>
<?php endif ?>




/*
  ** Single Coupon View 
*/  

<?php if($isSingleCoupon == true): ?>
<?php foreach($singleCoupon as $coupon){} ?>	

<table class="table">
	<tr>
		<td>Coupon Name</td>
		<td><?php echo $coupon['couponName'];?></td>
	</tr>
<tr>
		<td>Coupon Type</td>
		<td>
		<?php echo $coupon['couponType'] ?>
		</td>
	</tr>
<tr>
		<td>Start Date</td>
		<td>
			<?php echo $coupon['couponStartDate'];?>
		</td>
	</tr>
	<tr>
		<td>Expiry Date</td>
		<td>
			<?php echo $coupon['couponExpiryDate'];?>
		</td>
	</tr>
	<tr>
		<td>Amount</td>
		<td>
			<?php echo $coupon['couponAmount'];?>
		</td>
	</tr>

</table>
<?php echo form_close();?>
<?php endif ?>




/*
  ** All Coupon View 
*/  

<?php if($isAllCoupon == true): ?>
<?php foreach($allCoupon as $coupon){} ?>	

<table class="table">
	<tr>
		<td>Coupon Name</td>
		<td><?php echo $coupon['couponName'];?></td>
	</tr>
<tr>
		<td>Coupon Type</td>
		<td>
		<?php echo $coupon['couponType'] ?>
		</td>
	</tr>
<tr>
		<td>Start Date</td>
		<td>
			<?php echo $coupon['couponStartDate'];?>
		</td>
	</tr>
	<tr>
		<td>Expiry Date</td>
		<td>
			<?php echo $coupon['couponExpiryDate'];?>
		</td>
	</tr>
	<tr>
		<td>Amount</td>
		<td>
			<?php echo $coupon['couponAmount'];?>
		</td>
	</tr>

</table>
<?php echo form_close();?>
<?php endif ?>