<?php
/**
 * @package Modality
 */  
$modality_theme_options = modality_get_options( 'modality_theme_options' );
?>
<div id="copyright">
	<div class="copyright-wrap">
		<span class="left"><i class="fa fa-copyright"></i><a href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php echo esc_attr($modality_theme_options['footer_copyright_text']);?></a></span>
		<span class="right"><a title="<?php _e('Modality Theme','modality'); ?>" target="_blank" href="<?php echo esc_url( __('http://www.vmthemes.com/modality-wordpress-theme/','modality'));?>"><?php _e('Modality Theme','modality'); ?></a><?php _e(' powered by ','modality'); ?><a title="<?php _e('WordPress','modality'); ?>" href="<?php echo esc_url( __('http://wordpress.org/','modality'));?>"><?php _e('WordPress','modality'); ?></a></span>
	</div>
</div><!--copyright-->