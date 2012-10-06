<?php
/**
 * footer
 *
 */
?>
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div><!-- /#wrapper -->
	<div id="footer" class="clearfix">
		<?php /* 
		<div id="footer-widgets" class="clearfix">
			<div class="container">
				<div class="row">
					<div id="left-footer-widgets" class="span4 clearfix">
						<div id="text-3" class="widget widget_text">
							<h4 class="Text widget-title">Your Blog Found</h4>
							<div class="textwidget"></div>
						</div>
					</div><!-- /#left-footer-widget -->
					<div id="center-footer-widgets" class="span4 clearfix">
						<div id="rss-3" class="widget widget_rss"></div>
					</div><!-- /#center-footer-widget -->
					<div id="right-footer-widgets" class="span4 clearfix">
						<div id="meta-3" class="widget widget_meta">
							<h4 class="Meta widget-title">Meta</h4>
							<ul>
								<?php wp_register(); ?>
								<li><?php wp_loginout(); ?></li>
								<?php wp_meta(); ?>
							</ul>
						</div>
					</div><!-- /#right-footer-widget -->
				</div><!-- /row -->
			</div><!-- /container -->
		</div>
		*/?>
		<div id="sub-floor" class="clearfix">
			<div class="container">
				<div class="row">
					<div id="footer-links" class="span7">
						<?php
						/** Loading WordPress Custom Menu with Fallback to wp_list_pages **/
						wp_nav_menu( array( 'menu' => 'footer', 'container_class' => 'menu-footer-nav-container navbar', 'menu_class' => 'nav menu', 'menu_id' => 'menu-footer-menu' ) );
						?>
					</div><!-- /#footer-links -->			
					<div id="credit" class="span5">
						© 2012 <a href="http://рогейнвперми.рф/">Рогейн в Перми</a>								
					</div><!-- /#credits -->
				</div><!-- /row -->
			</div><!-- /.container -->
		</div>
	</div>
	<?php
    	if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-content");
	?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	(function (d, w, c) {
	    (w[c] = w[c] || []).push(function() {
	        try {
	            w.yaCounter15964006 = new Ya.Metrika({id:15964006, enableAll: true, webvisor:true});
	        } catch(e) {}
	    });
	    
	    var n = d.getElementsByTagName("script")[0],
	        s = d.createElement("script"),
	        f = function () { n.parentNode.insertBefore(s, n); };
	    s.type = "text/javascript";
	    s.async = true;
	    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

	    if (w.opera == "[object Opera]") {
	        d.addEventListener("DOMContentLoaded", f);
	    } else { f(); }
	})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="//mc.yandex.ru/watch/15964006" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<?php wp_footer(); ?>

</body>
</html>