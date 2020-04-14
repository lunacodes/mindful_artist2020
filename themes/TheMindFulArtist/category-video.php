<?php /* Template Name: Video Page */ 

if (!have_posts()) : ?>
  <div class="alert">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>

  <?php get_search_form(); ?>
<?php endif; ?>
<div id="videointo">
click on a video to watch it !  
</div>
<?php query_posts( 'cat=3&posts_per_page=200' ); ?>
<?php while (have_posts()) : the_post(); ?>
	<div id="archivevideos">
<article <?php post_class(); ?>>
    <header>
	<?php

		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
		$image = aq_resize( $img_url, 200, 150, true ); //resize & crop the image

	?>  
	<?php if($image) : ?>
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $image ?>"/></a>
	<?php endif; ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <footer>
        </footer>
  </article>
  </div>
<?php endwhile; ?>