<?php get_header(); ?> 
<section class="article-list-wrap" role="main">
<?php $my_query = new WP_Query('category_name=featured&posts_per_page=1');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID;?>
    <!-- Do stuff... -->
     <div class="featured-post">
        <?php get_template_part( 'entry-first-img' ); ?>
    	<?php get_template_part( 'entry-excerpt' ); ?>
    	<p><?php excerpt_length(200); ?></p>
    </div>
    
    
  <?php endwhile; ?>
   
<!-- --------------------------------------------------------------------------------- --> 
   
<div class="featured-section-news-wrapper">

<div class="featured-section-header" id="featured-section-header-news"><a href="section/News">More News</a></div>
<div class="featured-section" id="featured-section-news">
<?php $my_query = new WP_Query('category_name=news&posts_per_page=5');
  while ($my_query->have_posts()) : $my_query->the_post();
    if( $post->ID == $do_not_duplicate ) continue;?>
    <!-- Do stuff... -->
         <div class="featured-post-content"> 
		<div class="category-flex-wrap">
    	<?php get_template_part( 'entry-title' ); ?>
    	
    	<?php get_template_part( 'entry-first-img' ); ?>
		</div>
    
		
		<?php get_template_part( 'entry-meta' ); ?>

    </div>    
    
  <?php endwhile; ?>    
        </div>
        </div>

<!-- --------------------------------------------------------------------------------- --> 


<?php $my_query = new WP_Query('category_name=editorial&posts_per_page=1');
  while ($my_query->have_posts()) : $my_query->the_post();
  if( $post->ID == $do_not_duplicate ) continue;?>
    <!-- Do stuff... -->
<?php $authorname = get_post_meta(get_the_ID(),'_my_meta_value_key', true);?>
  <?php endwhile; ?>   



<div class="featured-section-editorial-wrapper">

<div class="featured-section-header" id="featured-section-header-editorial"><a href="section/editorial"><a>Editorial • By <?php echo $authorname;?></a></div>
<div class="featured-section">
<?php $my_query = new WP_Query('category_name=editorial&posts_per_page=1');
  while ($my_query->have_posts()) : $my_query->the_post();
  if( $post->ID == $do_not_duplicate ) continue;?>
    <!-- Do stuff... -->
     
			
		
    	<?php get_template_part( 'entry-excerpt' ); ?>
    	
    	<div class="featured-post-content"> 
    	
    	<?php get_template_part( 'entry-first-img' ); ?>

    </div>    
    
  <?php endwhile; ?>    
        </div>
		</div>

        
        
        
<!-- --------------------------------------------------------------------------------- --> 

<div class="featured-section-opinions-wrapper">
<div class="featured-section-header" id="featured-section-header-opinions"><a href="section/opinions">Opinions</a></div>
<div class="featured-section" id="featured-section-opinions">
<?php $my_query = new WP_Query('category_name=opinions&posts_per_page=5');
  while ($my_query->have_posts()) : $my_query->the_post();
  if( $post->ID == $do_not_duplicate ) continue;?>
    <!-- Do stuff... -->
     
    	<?php get_template_part( 'entry-excerpt' ); ?>
    	
    	<div class="featured-post-content"> 
    	
    	        	<?php get_template_part( 'entry-first-img' ); ?>

    </div>    
    
  <?php endwhile; ?>    
        </div>
</div>


<!-- --------------------------------------------------------------------------------- --> 

<div class="featured-section-arts-wrapper">

<div class="featured-section-header" id="featured-section-header-arts"><a href="section/arts">Arts</a></div>
<div class="featured-section" id="featured-section-arts">
<?php $my_query = new WP_Query('category_name=arts&posts_per_page=5');
  while ($my_query->have_posts()) : $my_query->the_post();
  if( $post->ID == $do_not_duplicate ) continue;?>
    <!-- Do stuff... -->
     
    	<?php get_template_part( 'entry-excerpt' ); ?>
    	
    	<div class="featured-post-content"> 
    	
            	<?php get_template_part( 'entry-first-img' ); ?>

    </div>    
    
  <?php endwhile; ?>    
        </div>
        </div>
<!-- --------------------------------------------------------------------------------- --> 

<div class="featured-section-features-wrapper">

<div class="featured-section-header" id="featured-section-header-features"><p> <a href="section/features">Features</a></p></div>
<div class="featured-section">
<?php $my_query = new WP_Query('category_name=features&posts_per_page=5');
  while ($my_query->have_posts()) : $my_query->the_post();
  if( $post->ID == $do_not_duplicate ) continue;?>
    <!-- Do stuff... -->
     
    	<?php get_template_part( 'entry-excerpt' ); ?>
    	
    	<div class="featured-post-content"> 
    	
            	<?php get_template_part( 'entry-first-img' ); ?>

    </div>    
    
  <?php endwhile; ?>    
        </div>
        </div>

<!-- --------------------------------------------------------------------------------- --> 

<div class="featured-section-sports-wrapper">

<div class="featured-section-header" id="featured-section-header-sports"><a href="section/Sports">Sports</a></div>
<div class="featured-section" id="featured-section-sports">
<?php $my_query = new WP_Query('category_name=sports&posts_per_page=5');
  while ($my_query->have_posts()) : $my_query->the_post();
  if( $post->ID == $do_not_duplicate ) continue;?>
     
    	<?php get_template_part( 'entry-excerpt' ); ?>
    	
    	<div class="featured-post-content"> 
    	        	<?php get_template_part( 'entry-first-img' ); ?>

    </div>    
    
  <?php endwhile; ?>    
        </div>
        </div>
        
<!-- --------------------------------------------------------------------------------- --> 

<body onmouseover="adjustdivheight()">

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

