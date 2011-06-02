<?php get_header(); ?>

	<div id="content">
		<h2 class="center">Error 404 - Not Found</h2>
		<div class="post">
		    	<p>Sorry, but this page doesn't exist on <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> at this time. If it once existed here then it may have been moved, renamed or deleted.</p>
		        <h2>What Now?</h2>
		        <p><strong>If you typed the address (URL), be sure to check your spelling!</strong></p>
		        <p>You could visit the <a href="<?php bloginfo('url'); ?>/">home page</a>.</p>
		        <h3>Random Posts</h3>
		        <ul> 
			        <?php $postslist = get_posts('numberposts=5&orderby=rand'); 
				foreach ($postslist as $post) : setup_postdata($post); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
				<?php endforeach; ?> 
			</ul>
        		<p>If all else fails try searching for what you're looking for:</p>
		</div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>