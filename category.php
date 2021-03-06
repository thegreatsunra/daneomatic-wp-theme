<?php get_header() ?>

	<div class="main" id="main">
		<div class="container">
			<div class="span-15 content" id="content">

		<h2 class="page-title"><?php _e('Category Archives:', 'sandbox') ?> <span><?php echo single_cat_title(); ?></span></h2>
			<div class="archive-meta"><?php if ( !(''== category_description()) ) : echo apply_filters('archive_meta', category_description()); endif; ?></div>

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older Posts', 'sandbox')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer Posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
			</div>

<?php while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class(); ?>">
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'sandbox'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h3>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'sandbox'), the_date('', '', '', false), get_the_time()) ?></abbr></div>
				<div class="entry-content">
<?php the_content(''.__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox').'') ?>

				</div>
				<div class="entry-meta">
<?php if ( $cats_meow = sandbox_cats_meow(', ') ) : /* Returns categories other than the one queried */ ?>
					<span class="cat-links"><?php printf(__('Also posted in %s', 'sandbox'), $cats_meow) ?></span>
<?php endif ?>
					<?php the_tags(__('<span class="tag-links">Tagged ', 'sandbox'), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n") ?> <span class="meta-sep">|</span> <span class="comments-link"><?php comments_popup_link(__('Comments (0)', 'sandbox'), __('Comments (1)', 'sandbox'), __('Comments (%)', 'sandbox')) ?></span>
<?php edit_post_link(__('Edit', 'sandbox'), "\t\t\t\t\t<span class=\"edit-link\">", "</span>"); ?>
				</div>
			</div><!-- .post -->

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older Posts', 'sandbox')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer Posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
			</div>

			</div><!-- #content -->

<?php get_sidebar() ?>

		</div><!-- #container -->
	</div><!-- #main -->
	
<?php get_footer() ?>