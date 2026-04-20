<?php
$unique_id = wp_unique_id( 'payak-accordion-item-' );

$block_context = array(
	'openByDefault' => ! empty( $attributes['openByDefault'] ) ? $attributes['openByDefault'] : false,
	'id'            => $unique_id,
);

$tags = new WP_HTML_Tag_Processor( $content );

if ( $tags->next_tag( array( 'class_name' => 'wp-block-payak-blocks-accordion-header__trigger' ) ) ) {
	$tags->set_attribute( 'id', $unique_id );
	$tags->set_attribute( 'aria-controls', $unique_id . '-panel' );

	if ( $tags->next_tag( array( 'class_name' => 'wp-block-payak-blocks-accordion-panel__wrapper' ) ) ) {
		$tags->set_attribute( 'id', $unique_id . '-panel' );
		$tags->set_attribute( 'aria-labelledby', $unique_id );
		$content = $tags->get_updated_html();
	}
}

$block_wrapper_custom_attributes = array(
	'class' => 'payak-accordion-item',
	'id'    => $unique_id
);

?>
<div
	<?php echo get_block_wrapper_attributes( $block_wrapper_custom_attributes ); ?>
	<?php echo wp_interactivity_data_wp_context( $block_context ); ?>
	data-wp-class--collapsed="state.isOpen"
	data-wp-init="callbacks.initIsOpen"
>
	<?php echo wp_kses_post( $content ); ?>
</div>
