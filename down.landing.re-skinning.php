<?php 
function add_reskinning_downland_admin_page() {
    $icon_url =  plugin_dir_url( __FILE__ ). '/imgs/icon.png';
    add_menu_page("Re-skinning DownCpa", "DownCpa", "administrator", "downlandadminpage", "reskinning_downland_admin_page", $icon_url, 3);
}
add_action('admin_menu', 'add_reskinning_downland_admin_page' );
function display_enable_reskinning_cloaker_down(){ ?>
	<input type="radio" name="enable_reskinning_cloaker_down" value="1" <?php checked(1, get_option('enable_reskinning_cloaker_down'), true); ?>> <b style="color:green;">Enable </b><span style="padding-right:30px;"></span>
	<input type="radio" name="enable_reskinning_cloaker_down" value="0" <?php checked(0, get_option('enable_reskinning_cloaker_down'), true); checked(null, get_option('enable_reskinning_cloaker_down'), true);?>> <b style="color:red;">Disable</b>
	<p class="description"><?php _e('Enable / Disable Bot Cloaking', 'reskigif'); ?></p>
	<br class="clear">
<?php } 

function display_reskinning_downland_button_text(){ ?>
    <input type="text" name="reskinning_downland_button_text" style="min-width: 600px;" placeholder="Button text here" id="reskinning_downland_button_text" value="<?php echo get_option('reskinning_downland_button_text'); ?>" />
    <p class="description"><?php _e('Enter your CPA button text here'); ?></p>
<?php }
function display_reskinning_downland_button_description(){ ?>
    <input type="text" name="reskinning_downland_button_description" style="min-width: 600px;" placeholder="Button description here" id="reskinning_downland_button_description" value="<?php echo get_option('reskinning_downland_button_description'); ?>" />
    <p class="description"><?php _e('Enter your CPA button description  here'); ?></p>
<?php }
function display_reskinning_downland_button_color(){ ?>
    <input type="text" name="reskinning_downland_button_color" style="min-width: 200px;" placeholder="Button Color here" id="reskinning_downland_button_color" value="<?php echo get_option('reskinning_downland_button_color'); ?>" />
    <p class="description"><?php _e('Enter your CPA button <code>HEX COLOR CODE</code> here - <code>Example: eb4034</code>'); ?></p>
    <p class="description"><?php _e('You can use <a target="_blank" href="https://www.google.com/search?q=color+picker">Google Color Picker</a> to choose a nice color'); ?></p>
<?php }
function display_downland_panel_fieldset(){
    add_settings_section("reskinning_downland_section", null, null, "reskinning_downland_options");
    add_settings_field("enable_reskinning_cloaker_down", "Cloaking", "display_enable_reskinning_cloaker_down", "reskinning_downland_options", "reskinning_downland_section");  
    register_setting("reskinning_downland_section", "enable_reskinning_cloaker_down");	
    add_settings_field("reskinning_downland_button_text", "Button Text", "display_reskinning_downland_button_text", "reskinning_downland_options", "reskinning_downland_section");  
    register_setting("reskinning_downland_section", "reskinning_downland_button_text");	
    add_settings_field("reskinning_downland_button_description", "Button Desctiption", "display_reskinning_downland_button_description", "reskinning_downland_options", "reskinning_downland_section");  
    register_setting("reskinning_downland_section", "reskinning_downland_button_description");	
    add_settings_field("reskinning_downland_button_color", "Button Color", "display_reskinning_downland_button_color", "reskinning_downland_options", "reskinning_downland_section");  
    register_setting("reskinning_downland_section", "reskinning_downland_button_color");	
}add_action("admin_init", "display_downland_panel_fieldset");
include( plugin_dir_path( __FILE__ ) . 'down.land.re-skinning.php'); 

