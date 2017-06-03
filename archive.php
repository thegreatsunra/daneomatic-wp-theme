<?php get_header() ?>

	<div class="main" id="main">
		<div class="container">
			<div class="span-15 content" id="content">

<?php the_post() ?>

<?php if ( is_day() ) : ?>
			<h2 class="page-title"><?php printf(__('Daily Archives: <span>%s</span>', 'sandbox'), get_the_time(get_option('date_format'))) ?></h2>
<?php elseif ( is_month() ) : ?>
			<h2 class="page-title"><?php printf(__('Monthly Archives: <span>%s</span>', 'sandbox'), get_the_time('F Y')) ?></h2>
<?php elseif ( is_year() ) : ?>
			<h2 class="page-title"><?php printf(__('Yearly Archives: <span>%s</span>', 'sandbox'), get_the_time('Y')) ?></h2>
<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
			<h2 class="page-title"><?php _e('Blog Archives', 'sandbox') ?></h2>
<?php endif; ?>

<?php rewind_posts() ?>

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older Posts', 'sandbox')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer Posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
			</div>

<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'sandbox'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h3>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'sandbox'), the_date('', '', '', false), get_the_time()) ?></abbr></div>
				<div class="entry-content">
<?php the_excerpt(''.__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox').'') ?>

				</div>
				<div class="entry-meta">
					<span class="cat-links"><?php printf(__('Filed under %s', 'sandbox'), get_the_category_list(', ')) ?></span> <span class="meta-sep">|</span> 
					<?php the_tags(__('<span class="tag-links">Tagged ', 'sandbox'), ", ", "</span>\n\t\t\t\t\t\n <span class=\"meta-sep\">|</span> ") ?>
<?php edit_post_link(__('Edit', 'sandbox'), "\t\t\t\t\t<span class=\"edit-link\">", "</span>"); ?><span class="comments-link"><?php comments_popup_link(__('Comments (0)', 'sandbox'), __('Comments (1)', 'sandbox'), __('Comments (%)', 'sandbox')) ?></span>
				</div>
			</div><!-- .post -->

<?php endwhile ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older Posts', 'sandbox')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer Posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
			</div>

			</div><!-- #content -->

<?php get_sidebar() ?>

		</div><!-- #container -->
	</div><!-- #main -->
	
<?php get_footer() ?>