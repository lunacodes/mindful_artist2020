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
<?php query_posts( 'post_type=video'); ?>
<?php while (have_posts()) : the_post(); ?>

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
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <?php if (get_next_posts_link()) : ?>
        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <?php endif; ?>
      <?php if (get_previous_posts_link()) : ?>
        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
      <?php endif; ?>
    </ul>
  </nav>
<?php endif; ?>
