
	<footer class="footer" id="footer">
	<div class="container">
		<ul>
					<li id="categories" class="span-20">
						<h3><?php _e('Categories', 'sandbox'); ?></h3>
						<ul>
		<?php wp_list_categories('title_li=&show_count=1&hierarchical=1') ?> 

						</ul>
					</li>

					<li id="archives" class="span-20">
						<h3><?php _e('Archives', 'sandbox') ?></h3>
						<ul>
		<?php wp_get_archives('type=monthly') ?>

						</ul>
					</li>		
		</ul>
		
		<p>Copyright &copy; 2006 &ndash; <?=date("Y", time());?> Dane Petersen. All rights reserved.<br />
A <a href="http://brainsideout.com/" rel="external">Brainside Out</a> production.<br /></p>
	</div>

</footer><!-- #footer -->
</div><!-- #wrapper .hfeed -->

<?php wp_footer() ?>

<script>
	var _gaq = [['_setAccount', 'UA-321702-7'], ['_trackPageview']];
	(function(d, t) {
		var g = d.createElement(t),
		s = d.getElementsByTagName(t)[0];
		g.async = true;
		g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s);
	})(document, 'script');
</script>
</body>
</html>