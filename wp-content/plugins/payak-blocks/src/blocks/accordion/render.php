<?php
$block_context = array(
	'autoclose'	=> ! empty( $attributes['autoclose'] ) ? $attributes['autoclose'] : false,
	'openItems' => array()
);
?>
<div
	data-wp-interactive="payak/accordion"
	<?php echo get_block_wrapper_attributes([ 'class' => 'payak-accordion' ]); ?>
	<?php echo wp_interactivity_data_wp_context( $block_context ); ?>
>
	<?php echo wp_kses_post( $content ); ?>
</div>
