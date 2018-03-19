<div class="row">
<?php echo anchor('admin/categories','All Services','class="btn btn-primary"');?>
<?php echo $this->session->flashdata('alert');?>
<?php echo form_open('admin/services/create');?>
<table class="table">
  <tr>
  <td>Category Name</td>
  <td>
  <select class="form-control" name="categoryId">
    <?php foreach($categories as $category){ ?>
      <option value="<?php echo $category['id'];?>"><?php echo $category['title'];?></option>
    <?php } ?>
  </select>
  </td>
  </tr>
  <tr>
  <td>Parent</td>
  <td>
  <select class="form-control" name="parentId">
      <option value="0" selected>Parent</option>
    <?php foreach($categories as $category){ ?>
      <option value="<?php echo $category['id'];?>"><?php echo $category['title'];?></option>
    <?php } ?>
  </select>
  </td>
  </tr>
  <tr>
  <td>Service Title</td>
  <td><?php echo form_input('title','','placeholder="Title" class="form-control" required');?></td>
  </tr>
  <tr>
  <td>Service Name</td>
  <td><?php echo form_input('name','','placeholder="Name" class="form-control" required');?></td>
  </tr>
  <tr>
  <td>Service Pricing Tag</td>
  <td><?php echo form_textarea('price_detail','{ "price" : "0.00","currency" : "USD","paymentKind":"hourly" }','placeholder="Name" class="form-control" required');?></td>
  </tr>
  <tr>
  <td></td>
  <td><?php echo form_submit('createBtn','Create','class="btn btn-primary"');?></td>
  </tr>
</table>
<?php echo form_close();?>
</div>
