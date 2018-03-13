<?php echo $this->session->flashdata('alert');?>
<?php echo form_open('admin/loan/create');?>
<div class="row">
   <div class="col-md-12">
      <table class="table">
        <tr><td colspan="2">
          <a href="">Create Loan</a>
        </td></tr>
        <tr>
            <th>Name</th>
            <th>
                <select name="user" class="form-control">
                  <?php foreach($content as $user){ ?>
                       <option value="<?php echo $user['user_id'];?>">
                         <?php echo $user['first_name'];?> <?php echo $user['last_name'];?>
                       </option>
                  <?php } ?>
                </select>
            </th>
        </tr>
        <tr>
            <th>Loan Amount</th>
            <th><input type="currency" name="loan_amount" class="form-control" value="100.00" placeholder="Enter Loan Amount" required/></th>
        </tr>
        <tr>
            <th>Interest Rate</th>
          <th><input type="number" name="interest" class="form-control"  value="5" placeholder="Interest Rate %" required/></th>
        </tr>
        <tr>
            <th>Time Period</th>
           <th><input type="number" name="time_period" class="form-control"  value="1" placeholder="Time Period (Year)" required/></th>
        </tr>
        <tr>
            <th>Status</th>
            <th>
              <select name="status" class="form-control">
                <option value="1">Active</option>
                <option value="2" selected>Pending</option>
                <option value="3">Waiting</option>
                <option value="4">Deactive</option>
              </select>
            </th>
        </tr>
        <tr>
            <th></th>
           <th><input type="submit" name="create_loan" class="btn btn-primary" /></th>
        </tr>
      </table>
   </div>
</div>
<?php echo form_close();?>
