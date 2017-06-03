<?php get_header() ?>

	<div class="main" id="main">
		<div class="container">
			<div class="span-15 content" id="content">

			<div id="post-0" class="post error404">
				<h2 class="entry-title"><?php _e('Not Found', 'sandbox') ?></h2>
				<div class="entry-content">
					<p><?php _e('Apologies, but we were unable to find what you were looking for. Perhaps  searching will help.', 'sandbox') ?></p>
				</div>
				<form id="error404-searchform" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="error404-s" class="text-input" name="s" type="text" value="<?php the_search_query() ?>" size="40" />
						<input id="error404-searchsubmit" class="submit-button" name="searchsubmit" type="submit" value="<?php _e('Find', 'sandbox') ?>" />
					</div>
				</form>
			</div><!-- .post -->

			</div><!-- #content -->

<?php get_sidebar() ?>

		</div><!-- #container -->
	</div><!-- #main -->
	
<?php get_footer() ?>