<div class="row sbs-remote-post">
<div class="col-sm-4 article-image">
  <?php
  if(!empty($post->post_image_url)){
    ?>
    <a href="<?php echo $post->post_link;?>"><img class="card-img-top" src="<?php echo $post->post_image_url;?>" alt="Card image cap"></a>
    <?php
  }
  ?>
</div>
<div class="col-sm-4 article-card">
  <a href="<?php echo $post->post_link;?>">
  <div class="article-title">
    <?php echo $post->post_title; ?>
  </div>
  <div class="article-date">
    <?php echo sbs_getDateTime($post->post_date,'m/d/Y'); ?>
  </div>
  <div class="article-content">
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
  </div>
  </a>
</div>
</div>
</div>    
