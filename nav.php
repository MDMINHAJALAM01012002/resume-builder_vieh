<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="<?=$action->helper->loadimage('logo.png')?>" alt="" height="24">RESUME FORMETS </a>
   
    
      <div class="navbar-nav">
        <?php
if($action->user_id()){
  ?>
<a class="nav-link <?=@$myresume?> " aria-current="page" href="#"><i class="bi bi-file-earmark-person"></i>My Resumes</a>
        <a class="nav-link <?=@$profile?>" href="#"><i class="bi bi-person-lines-fill"></i>Profile</a>
        <a class="nav-link" href="<?=$action->helper->url('action/logout')?>"><i class="bi bi-box-arrow-right"></i>Logout</a>
        
  <?php
}else{
  ?>
  <a class="nav-link" href="<?=$action->helper->url('login')?>"><i class="bi bi-box-arrow-right"></i>Login</a>
  <a class="nav-link" href="<?=$action->helper->url('signup')?>"><i class="bi bi-box-arrow-right"></i>Signup</a>
<?php
}

        ?>
        
      </div>
    </div>
  </div>
</nav>