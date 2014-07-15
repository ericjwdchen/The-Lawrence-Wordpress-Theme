<?php get_header(); ?>
<header class="header">
<div class="category-title"><?php _e( '', 'blankslate' ); ?><?php single_cat_title(); ?></div>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</header>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="category-post">
 <div class="title-img-wrapper">
    	<div class="category-post-title"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
    	
        <?php get_template_part( 'entry-first-img' ); ?>

		</div>
    	<div class="category-post-content"> 
    	<?php excerpt_length(300); ?>

    </div>
    </div>
    

<?php endwhile; endif; ?>


<?php get_template_part( 'nav', 'below' ); ?> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>