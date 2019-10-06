	<div id="sidebar" class="sidebar span-7 prepend-1 last">

		<ul class="xoxo">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>

	<li id="about"><h3>About Dane</h3>

<img src="<?php bloginfo('template_url'); ?>/images/headshot-05.jpg" alt="Dane Petersen" title="Dane Petersen" />

	<p>Dane Petersen is a one part interaction designer, one part design technologist, and three parts troublemaker. He enjoys playing outside, talking loudly and waving his hands around.</p>

<p>Dane has worked as a wilderness guide, snowboard instructor, windsurf technician and envelope stuffer. He loves space, airplanes, saunas, running, backpacking and homebrewing.</p>

<p>At GE he designed diagnostics apps for monitoring jet engines, at Filament he built cross-platform apps for managing industrial IoT sensor networks, and at Adaptive Path he helped companies like PG&amp;E, Sunrun and Nike strategize great digital products.</p>

<p>His portfolio is at <a href="http://thegreatsunra.com">thegreatsunra.com</a>.</p>

<p>You can email him at<br /><script type="text/javascript">
//<![CDATA[

function hiveware_enkoder(){var i,j,x,y,x=
"x=\"783d223738336432323739336532333337333533373637333733343338333633373635" +
"33373336333736363338333533333636333833383338333333373361333833353337333633" +
"33333933333333333733353337333233373636333733363336363333373332333833353336" +
"36353337333533373332333736363337333633373637333736353337333233383335333733" +
"61333733343336363333373335333736373338333533363635333733343337363733373635" +
"33333333333333613334363333343331333436333233336337613365323832383363363737" +
"30373332393661336533313363366133643739326636643636366636383735363933633661" +
"32633365333332613763376132633365373636663636373436343632373136363239323832" +
"36323832633739326637343736363337343735373332393661326433333261326133633765" +
"37613232336237393364323732373362373833643735366536353733363336313730363532" +
"38373832393362363636663732323836393364333033623639336337383265366336353665" +
"36373734363833623639326232623239376236613364373832653633363836313732343336" +
"66363436353431373432383639323932643331336236393636323836613363333333323239" +
"36613262336433393334336237393262336435333734373236393665363732653636373236" +
"6636643433363836313732343336663634363532383661323937643739223b793d27273b66" +
"6f7228693d303b693c782e6c656e6774683b692b3d32297b792b3d756e6573636170652827" +
"25272b782e73756273747228692c3229293b7d79\";y='';for(i=0;i<x.length;i+=2){y" +
"+=unescape('%'+x.substr(i,2));}y";
while(x=eval(x));}hiveware_enkoder();

//]]>
</script>.</p>

	</li>
	
			<!-- <li id="pages">
				<h3><?php _e('Pages', 'sandbox') ?></h3>
				<ul>
<?php wp_list_pages('title_li=&sort_column=post_title' ) ?>
				</ul>
			</li> -->


<?php endif; // end primary sidebar widgets  ?>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin  secondary sidebar widgets ?>
	<!-- <li><h3 class="flickr"><a href="http://flickr.com/photos/thegreatsunra" title="Dane's Flickr Stream"><span class="flickr-flick">Flick<span class="flickr-r">r</span></span> Stream</a></h3><div id="flickr">
	<script type="text/javascript" src="http://flickr.com/badge_code_v2.gne?show_name=1&amp;count=5&amp;display=latest&amp;size=m&amp;layout=v&amp;source=user&amp;user=16815738%40N00"></script>
	</div>
	</li> -->


<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&show_images=1') ?>

			<li id="rss-links">
				<h3><?php _e('RSS Feed', 'sandbox') ?></h3>
				<ul>
					<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(bloginfo('name'), 1) ?> <?php _e('RSS Feed for All Posts', 'sandbox'); ?>" rel="alternate" type="application/rss+xml"><?php _e('Feed for All Posts', 'sandbox') ?></a></li>
				</ul>
			</li>

			<li id="search">
				<h3><label for="s"><?php _e('Search', 'sandbox') ?></label></h3>
				<form id="searchform" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s" name="s" class="text-input" type="text" value="<?php the_search_query('') ?>" size="20" tabindex="1" accesskey="S" />
						<input id="searchsubmit" class="submit-button" name="searchsubmit" type="submit" value="<?php _e('Search', 'sandbox') ?>" tabindex="2" />
					</div>
				</form>
			</li>
						
<?php endif; // end secondary sidebar widgets  ?>
		</ul>
		
	</div>
