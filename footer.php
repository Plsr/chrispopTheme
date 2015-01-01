			</div><!-- /wrapper --> 
			<footer>
				<p>
					&copy; <?php echo date('Y'); ?> Copyright <a href="http://twitter.com/_chrispop">&#64;_chrispop</a>. 
					<br> Powered by
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
			</footer>
		</div><!-- /wrapper -->
		<?php wp_footer(); ?>
	</body>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js"></script>
	<script>
  		$(document).ready(function(){
    		// Target your .container, .wrapper, .post, etc.
    		$(".post-content").fitVids();
  		});
		</script>

</html>
