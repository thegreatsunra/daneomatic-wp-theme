
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
A <a href="https://brainsideout.com/" rel="external">Brainside Out</a> production.<br /></p>
	</div>

</footer><!-- #footer -->
</div><!-- #wrapper .hfeed -->

<?php wp_footer() ?>
</body>
</html>
