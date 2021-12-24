<?php
if(trim($template)!==''){
 ?>
 <div class="module post-module et_pb_extra_module  et_pb_posts_3" style="border-top-color:#7ac8cc;margin: 0;border-radius: 0 !important;">
	<div class="module-head new">
		<h1 style="color:#7ac8cc">CHENMED BLOG</h1>
	</div>
	</div>
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
