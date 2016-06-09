<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage Provoker
 */
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $args = array(
						'theme_location' => 'bottom',
						'container'=> false,
						'menu_class' => 'nav nav-pills bottom-menu',
				  		'menu_id' => 'bottom-nav',
				  		'fallback_cb' => false
				  	);
					wp_nav_menu($args);
					?>

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=24462497&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/24462497/2_0_FF4656FF_E32636FF_1_pageviews"
style="width:80px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: дані за сьогодні (перегляди)" onclick="try{Ya.Metrika.informer({i:this,id:24462497,lang:'ua'});return false}catch(e){}" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter24462497 = new Ya.Metrika({
                    id:24462497,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/24462497" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

				</div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
