<div class="row">
<?php echo anchor('admin/services/create','Create Service','class="btn btn-primary"');?>
<?php echo $this->session->flashdata('alert');?>
<table class="table">
  <tr class="alert-info">
  <th>#</th>
  <th>Title</th>
  <th>Category</th>
  <th>Price</th>
  <th>Created<br>Updated</th>
  <th></th>
  </tr>

  <?php $i = 1 ; foreach($services as $service){ ?>
    <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $service['title'];?></td>
    <td><?php echo $service['categoryName'];?></td>
    <td><?php echo $service['pricing_detail'];?></td>
    <td><?php echo $service['created'];?><br><?php echo $service['updated'];?></td>
    <td><?php echo anchor('admin/services/update/'.$service['id'],'Edit');?>
      <br><?php echo anchor('admin/services/delete/'.$service['id'],'Del');?></td>
    </tr>
  <?php $i++; } ?>

</table>
</div>
