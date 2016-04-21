<?php
/**
 * Template for displaying search forms
 *
 * @package zonnewende
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
	      <input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'zonnewende' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'zonnewende' ); ?>" />
	      <span class="input-group-btn">
	        <button class="btn btn-default" type="submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'zonnewende' ); ?></span>Search</button>
	      </span>
	</div>
</form>