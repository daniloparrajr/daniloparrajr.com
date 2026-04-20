<div
	<?php echo get_block_wrapper_attributes( [ 'class' => 'payak-accordion-panel' ] ); ?>
	data-wp-bind--aria-expanded="state.isOpen"
	data-wp-bind--inert="!state.isOpen"
>
	<?php echo wp_kses_post( $content ); ?>
</div>
