<?php
if(trim($template)!==''){
 ?>
 <div class="row sbs_author_blog sbs-remote-post-container">
   <?php echo $template; ?>
 </div>
 <?php
}
else{
  ?>
  <div class="row article-no-data">
    <?php echo __('Sorry, there is no data to display','sbs_author_blog'); ?>
  </div>
  <?php
}
?>
