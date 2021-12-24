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
    <div class="article-title">
      <a href="<?php echo $post->post_link;?>"><?php echo $post->post_title; ?></a>
    </div>
    <div class="article-date">
      <?php echo sbs_getDateTime($post->post_date,'m.d.Y'); ?><span>ChenMed</span>
    </div>
    <div class="read-more"><a href="<?php echo $post->post_link;?>">Read More</a></div>
  </div>
</div>
