<?php echo $this->session->flashdata('alert');?>

<?php foreach($loanDetail as $loan){} ?>
<?php echo form_open('admin/loan/update/'.$this->uri->segment(4));?>
<div class="row">
   <div class="col-md-12">
      <table class="table">
        <tr>
          <td colspan="5">

             <?php echo anchor('admin/loan/releaseFund/'.$this->uri->segment(4),'Approve Fund','class="btn btn-success"');?>
             <?php echo anchor('admin/loan/cancelFund/'.$this->uri->segment(4),'Reject Loan','class="btn btn-danger"');?>

        </td>
      </tr>
        <tr>
            <th>Name</th>
            <th>
                <select name="user" class="form-control">
                  <?php foreach($userList as $user){ ?>
                       <option value="<?php echo $user['user_id'];?>">
                         <?php echo $user['first_name'];?> <?php echo $user['last_name'];?>
                       </option>
                  <?php } ?>
                </select>
            </th>
        </tr>
        <tr>
            <th>Loan Amount</th>
            <th><input type="currency" name="loan_amount" value="<?php echo $loan['loan_amount'];?>" class="form-control" placeholder="Enter Loan Amount" required/></th>
        </tr>
        <tr>
            <th>Interest Rate</th>
          <th><input type="number" name="interest" value="<?php echo $loan['interest'];?>" class="form-control" placeholder="Enter Loan Amount" required/></th>
        </tr>
        <tr>
            <th>Time Period</th>
           <th><input type="number" name="time_period" value="<?php echo $loan['time'];?>" class="form-control" placeholder="Enter Loan Amount" required/></th>
        </tr>
        <tr>
            <th>Status</th>
            <th>
              <select name="status" class="form-control">
                <option value="1" <?php echo ($loan['loan_status_id'] == 1) ? "selected" : "";?> > Active</option>
                <option value="2" <?php echo ($loan['loan_status_id'] == 2) ? "selected" : "";?> > Pending</option>
                <option value="3" <?php echo ($loan['loan_status_id'] == 3) ? "selected" : "";?> > Waiting</option>
                <option value="4" <?php echo ($loan['loan_status_id'] == 4) ? "selected" : "";?> > Deactive</option>
              </select>
            </th>
        </tr>
        <tr>
            <th></th>
           <th><input type="submit" name="update_loan" class="btn btn-primary" value="Update" /></th>
        </tr>
      </table>
   </div>
</div>
<?php echo form_close();?>
