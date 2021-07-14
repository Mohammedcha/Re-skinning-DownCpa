<?php function reskinning_downland_admin_page(){ ?>
	<div class="wrap">
		<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">
				<div id="post-body-content" style="position: relative">
					<div class="stuffbox" style="padding:20px">		
						<h1>
							<img src="<?php echo plugin_dir_url( __FILE__ ) . '/imgs/icon.png'; ?>" /> Re-skinning DownCpa By Mohammed Cha
						</h1>
						<hr>
					<form method="post" action="options.php">
						<?php
							settings_fields("reskinning_downland_section");
							do_settings_sections("reskinning_downland_options");      
							submit_button(); 
						?>          
					</form>
						<br class="clear">
						<span style="float:right;">Re-skinning DownCpa <b style="color:red; font-size:20px;">&hearts;</b> By <a target="_blank" color="brown" href="https://re-skinning.com"> Mohammed Cha </a></span>
						<br class="clear">
					</div>	
				</div>	
				<div id="postbox-container-1" class="postbox-container">
					<div class="postbox">
						<h2 style="font-size:19px;" class="hndle ui-sortable-handle"><strong>Re-skinning DownCpa</strong></h2>
						<div class="inside">
							<div class="main">
							<img style="max-width: 100%;" class="maxwidth" src="<?php echo plugin_dir_url( __FILE__ ) . '/imgs/logo.png'; ?>">
								<hr>
									<p>Re-skinning DownCpa By <a href="https://github.com/Mohammedcha/Re-skinning-DownCpa" target="_blank">Mohammed Cha</a></p>
							</div>
						</div>
					</div>
				</div>		
			</div>	
		</div>		
	</div>
	<br class="clear">
<?php }	
error_reporting(0);
function detectBot_sp_down($USER_AGENT) {
	$crawlers_agents = strtolower('Bloglines subscriber|Dumbot|Sosoimagespider|QihooBot|FAST-WebCrawler|Superdownloads Spiderman|LinkWalker|msnbot|ASPSeek|WebAlta Crawler|Lycos|FeedFetcher-Google|Yahoo|YoudaoBot|AdsBot-Google|Googlebot|Scooter|Gigabot|Charlotte|eStyle|AcioRobot|GeonaBot|msnbot-media|Baidu|CocoCrawler|Google|Charlotte t|Yahoo! Slurp China|Sogou web spider|YodaoBot|MSRBOT|AbachoBOT|Sogou head spider|AltaVista|IDBot|Sosospider|Yahoo! Slurp|Java VM|DotBot|LiteFinder|Yeti|Rambler|Scrubby|Baiduspider|accoona');
	$crawlers = explode("|", $crawlers_agents);
	if(is_array($crawlers)) {
		foreach($crawlers as $crawler) {
			if (strpos(strtolower($USER_AGENT), trim($crawler)) !== false) {
				return true;
			}
		}
	}
	return false;
}
$enable_reskinning_cloaker_down = get_option('enable_reskinning_cloaker_down');
if ($enable_reskinning_cloaker_down == 1){
		if(detectBot_sp_down($_SERVER['HTTP_USER_AGENT'])) {} else {
			add_filter( 'the_content', function( $content ) {
				if( is_single() ){
					$reskinning_downland_button_color = get_option('reskinning_downland_button_color');
					$content .= '
						<style>
							.reskinning_btn_down { text-align:center; }
							.reskinning_btn_down a { background-color: #'.$reskinning_downland_button_color.'; border: none; border-radius:4px; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 1em;}
						</style>
					<div class="reskinning_btn_down">
					<p>'.get_option('reskinning_downland_button_description').'</p>
					<a href="'.get_bloginfo('url').'/down.php?file='.get_the_title().'" target="_blank">'.get_option('reskinning_downland_button_text').'</a>
					</div>';
				}
				return $content;
			}, 99 );
		}
}else{
	add_filter( 'the_content', function( $content ) {
		if( is_single() ){
			$reskinning_downland_button_color = get_option('reskinning_downland_button_color');
			$content .= '
				<style>
					.reskinning_btn_down { text-align:center; }
					.reskinning_btn_down a { background-color: #'.$reskinning_downland_button_color.'; border: none; border-radius:4px; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 1em;}
				</style>
			<div class="reskinning_btn_down">
			<p>'.get_option('reskinning_downland_button_description').'</p>
			<a href="'.get_bloginfo('url').'/down.php?file='.get_the_title().'" target="_blank">'.get_option('reskinning_downland_button_text').'</a>
			</div>';
		}
		return $content;
	}, 99 );
}