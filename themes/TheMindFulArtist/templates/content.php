<?php if (!have_posts()) : ?>
  <div class="alert">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
	
	<div style="clear:both;"></div>
  <article <?php post_class(); ?>>
    <header>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div style="clear:both;"></div>
    <div class="entry-summary">
	    <?php
	    $content = apply_filters('the_content', $content);
	    $content = str_replace(']]>', ']]>', $content);
	    ?>
      <?php the_content(); ?>
    <i class="fa fa-comments"></i> <a href="<?php echo get_permalink(); ?>#commentanchor">Leave a Comment</a>
    <div style="clear:both;"></div>
    <footer>
	    
	    <div style="clear:both;"></div>

	    <!-- AddThis Button BEGIN -->
	    <div class="addthis_toolbox addthis_default_style ">
	    <a class="addthis_button_preferred_1"></a>
	    <a class="addthis_button_preferred_2"></a>
	    <a class="addthis_button_preferred_3"></a>
	    <a class="addthis_button_preferred_4"></a>
	    <a class="addthis_button_compact"></a>
	    <a class="addthis_counter addthis_bubble_style"></a>
	    </div>
	    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-520e6dca643de580"></script>
	    <!-- AddThis Button END -->

	    <div style="clear:both;"></div>
	    
    <?php the_tags('Posted in: <ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
 
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