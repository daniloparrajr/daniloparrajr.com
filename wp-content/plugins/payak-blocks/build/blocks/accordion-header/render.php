<?php
$heading_tag = 'h3';
if ( ! empty( $block->context["payak-blocks/headingLevel"] ) ) {
	$heading_tag = "h{$block->context["payak-blocks/headingLevel"]}";
}
?>
<<?php echo esc_html( $heading_tag ); ?>
	<?php echo get_block_wrapper_attributes([ 'class' => 'payak-accordion-header' ]); ?>>
	<button
		type="button"
		class="payak-accordion-header__trigger"
		data-wp-on--click="actions.toggle"
		data-wp-class--collapsed="state.isOpen"
		data-wp-bind--aria-expanded="state.isOpen"
	>
		<span class="payak-accordion-header__title">
			<?php echo wp_kses_post( $content ); ?>
		</span>
		<span class="payak-accordion-header__icon"></span>
	</button>
</<?php echo esc_html( $heading_tag ); ?>>
