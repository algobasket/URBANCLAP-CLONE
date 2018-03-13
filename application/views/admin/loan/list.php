<?php echo $this->session->flashdata('alert');?> 
<div class="row">
   <div class="col-md-12">
      <table class="table table-striped table-bordered table-hover">
         <tr>
            <th colspan="9"><?php echo anchor('admin/loan/create/',"Create",'class="btn btn-primary"');?></th>
        </tr>
        <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Loan Amount</th>
            <th>Interest%</th>
            <th>Time(Years)</th>
            <th>Created</th>
            <th>Update</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        if(is_array($userList)){
        foreach($userList as $list){ ?>
        <tr class="alert alert-success">
            <td><?php echo $i;?></td>
            <td><?php echo $list['first_name'];?></td>
            <td><?php echo $list['loan_amount'];?></td>
            <td><?php echo $list['interest'];?>(Amount <?php echo $list['interest'] * $list['loan_amount']/100;?>)</td>
            <td><?php echo $list['time'];?></td>
            <td><?php echo $list['created'];?></td>
            <td><?php echo $list['updated'];?></td>
            <td><?php echo $list['name'];?></td>
            <td>
              <?php echo anchor('admin/loan/update/'.$list['loan_id'],"Edit");?> |
              <?php echo anchor('admin/loan/delete/'.$list['loan_id'],"Delete");?>
            </td>
        </tr>
      <?php $i++ ;} } else{ ?>
        <tr><td colspan="9">No Loan Data</td></tr>
      <?php } ?>
      </table>
   </div>
</div>
