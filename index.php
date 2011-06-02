<?php get_header(); ?>

	<div id="content">
    <p class="pre-content">Latest Posts</p>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="postmetadata">
				  Posted <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</p>
				<div class="entry">
					<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
				</div>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
    <?php pagination(); ?>
  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
