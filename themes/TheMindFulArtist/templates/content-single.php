<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"> | <?php the_title(); ?> | </h1>
      <?php get_template_part('/templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    <div style="clear:both;"></div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>

<a name="commentanchor"></a>
	<div class="comment container">
    <?php comments_template('/templates/comments.php'); ?>
	</div>

  </article>
<?php endwhile; ?>