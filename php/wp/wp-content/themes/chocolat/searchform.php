<?php
/**
 * The Search form template
 * @package   Chocolat
 * @copyright Copyright (c) 2014 Mignon Style
 * @license   GNU General Public License v2.0
 * @since     Chocolat 1.0
 */
?>
<div class="search-box">
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label><span class="screen-reader-text icon-search"><?php _e( 'Search', 'chocolat' ); ?></span></label>
		<input type="search" class="search-field watermark-text" value="<?php _e( 'Search', 'chocolat' ); ?>" name="s" />
		<button type="submit" class="search-submit icon-search" value="<?php _e( 'Search', 'chocolat' ); ?>"></button>
	</form>
</div>