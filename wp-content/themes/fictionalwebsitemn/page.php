<?php
get_header();
while(have_posts()) {
  the_post(); 
  pageBanner();?>

    

  <div class="container container--narrow page-section">

    <?php
    $theParentID = wp_get_post_parent_id(get_the_ID());
    if ($theParentID){ ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParentID);?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParentID);?></a> <span class="metabox__main"><?php the_title();?></span></p>
    </div>  
    <?php }
   ?>
    
    <?php 
    $testArray = get_pages(array(
      'child_of'=> get_the_ID()
    ));

    
    if($theParentID or $testArray) {?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParentID);?>"><?php echo get_the_title($theParentID);?></a></h2>
      <ul class="min-list">
        <?php

        if($theParentID) {
          $FindChildrenOf = $theParentID;
        } else {
          $FindChildrenOf = get_the_ID();
        }
        wp_list_pages(array(
          'title_li' => NULL,
          'child_of' => $FindChildrenOf,
          'sort_column' => 'menu_order'
        ));?>
        
      </ul>
    </div>
    <?php } ?>
    <div class="generic-content">
      <?php the_content(); 

      $skyColorValue = sanitize_text_field(get_query_var('skyColor'));
      $grassColorValue = sanitize_text_field(get_query_var('grassColor'));
      
      if($skyColorValue == 'blue' AND $grassColorValue == 'green') {
        echo '<p>The sky is beautiful blue today!</p>';
        echo '<p>The grass is beautiful green today, life is good!</p>';
      }
      
      
      ?>

      <form method="get"> 
      <input name="skyColor" placeholder="Sky Color">
      <input name="grassColor" placeholder="Grass color">
      <button>Submit</button>
      </form>

    </div>

  </div>
  
<?php
}
get_footer();
?>