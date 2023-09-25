
<div class="container">

<div class="card my-2">
    <div class="card-header">
    
    <a href="<?=$action->helper->url('select-template')?>" class="btn btn-sm btn-primary"><i class="bi bi-file-earmark-plus-fill"></i> Create New Resume</a>
  

</div>
  
</div>
<?php
foreach($cv as $cv){
  ?>
  <div class="card my-3">
  <div class="card-body">
    <h5 class="card-title"><?=$cv['headline']?></h5>
    <p class="card-text"><?=$cv['objective']?></p>
    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-pencil-square"></i> Update</a>
    <a href="<?=$action->helper->url("cv/".$cv['url'])?>" class="btn btn-sm btn-success"><i class="bi bi-eye-fill"></i> View</a>
    <a href="<?=$action->helper->url("action/deletecv/".$cv['url'])?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
    <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-link-45deg"></i> Copy Url</a>
    <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-folder-symlink-fill"></i> Create Url</a>
  </div>
</div>
<?php
}
if(count($cv)<1){
  ?>
<div class="card my-3">
  <div class="card-body">
    <h1 class="text-center text-muted"><i class="bi bi-cloud-snow-fill"></i> No Resumes Available Here</h1>
    
</div>
</div
  <?php
}
?>

