<div class="row">
<?php echo anchor('admin/categories_questions/create','Create Category Questions','class="btn btn-primary"');?>
<?php echo $this->session->flashdata('alert');?>
<table class="table">
  <tr class="alert-info">
  <th>#</th>
  <th>Title</th>
  <th>Name</th>
  <th>Created<br>Updated</th>
  <th></th>
  </tr>

  <?php $i = 1 ; foreach($categories_questions as $category){ ?> 
    <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $category['title'];?></td>
    <td><?php echo $category['name'];?></td>
    <td><?php echo $category['created'];?><br><?php echo $category['updated'];?></td>
    <td><?php echo anchor('admin/categories_questions/update/'.$category['id'],'Edit');?>
      <br><?php echo anchor('admin/categories_questions/delete/'.$category['id'],'Del');?></td>
    </tr>
  <?php $i++; } ?>

</table>
</div>
