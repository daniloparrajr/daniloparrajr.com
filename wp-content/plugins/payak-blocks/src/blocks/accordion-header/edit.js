import { __ } from '@wordpress/i18n';

import { useBlockProps, RichText } from '@wordpress/block-editor';

import './editor.scss';

export default function Edit( props ) {
	const { attributes, setAttributes, context } = props;
	const { content } = attributes;
	const { 'payak-blocks/headingLevel': headingLevel } = context;

	const tagName = 'h' + headingLevel;
	const blockProps = useBlockProps( {
		className: 'eb-accordion-header',
	} );

	return (
		<RichText
			{ ...blockProps }
			tagName={ tagName }
			placeholder={ __( 'Accordion Header', 'payak-blocks' ) }
			value={ content }
			onChange={ ( content ) => setAttributes( { content } ) }
		/>
	);
}
