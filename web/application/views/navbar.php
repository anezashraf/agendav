<div class="navbar">
 <div class="navbar-inner">
  <div class="container-fluid">
   <span class="brand"><?php echo $title ?></span>
<?php 
if (isset($logged_in)):
?>
   <ul class="nav pull-right">
    <li class="dropdown" id="usermenu"><a href="#"><span class="username"><?php echo
	$this->auth->get_user() ?></span><b class="caret"></b></a></li>
   </ul>
<?php
endif;
?>
  </div>
 </div>
</div>
