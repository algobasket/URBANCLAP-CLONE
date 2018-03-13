<div class="row">
<?php echo anchor('admin/categories','All Category','class="btn btn-primary"');?>
<?php echo $this->session->flashdata('alert');?>
<?php echo form_open('admin/categories/update/'.$this->uri->segment(4));?>
<?php foreach($getCategory as $category){} ?>
<table class="table">
  <tr>
  <td>Title</td>
  <td><?php echo form_input('title',$category['title'],'placeholder="Title" class="form-control" required');?></td>
  </tr>
  <tr>
  <td>Name</td>
  <td><?php echo form_input('name',$category['name'],'placeholder="Name" class="form-control" required');?></td>
  </tr>
  <tr>
  <td>Parent</td>
  <td>
  <select class="form-control" name="categoryId">
      <option value="0" selected>Parent</option>
    <?php foreach($categories as $category){ ?>
      <option value="<?php echo $category['id'];?>"><?php echo $category['title'];?></option>
    <?php } ?>
  </select>
  </td>
  </tr>
  <tr>
  <td></td>
  <td><?php echo form_submit('updateBtn','Update','class="btn btn-primary"');?></td>
  </tr>
</table>
<?php echo form_close();?>
</div>
