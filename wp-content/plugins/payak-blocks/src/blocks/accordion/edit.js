import { __ } from '@wordpress/i18n';

import {
	useBlockProps,
	useInnerBlocksProps,
	HeadingLevelDropdown,
	BlockControls,
	InspectorControls,
} from '@wordpress/block-editor';

import {
	ToggleControl,
	PanelBody,
} from '@wordpress/components';

const TEMPLATE = [ [ 'payak-blocks/accordion-item' ] ];

import './editor.scss';

export default function Edit( props ) {
	const { attributes, setAttributes } = props;
	let {
		allowedBlocks,
		headingLevel,
		autoclose
	} = attributes;

	const blockProps = useBlockProps( {
		className: 'eb-accordion',
	} );

	const innerBlocksProps = useInnerBlocksProps(
		{
			...blockProps,
		},
		{
			allowedBlocks,
			template: TEMPLATE,
		}
	);

	return (
		<>
			<BlockControls>
				<HeadingLevelDropdown
					onChange={ ( level ) =>
						setAttributes( { headingLevel: level } )
					}
					options={ [ 2, 3, 4, 5, 6 ] }
					value={ headingLevel }
				/>
			</BlockControls>
			<InspectorControls>
				<PanelBody title={__( 'Settings', 'payak-blocks' )}>
					<ToggleControl
						__nextHasNoMarginBottom
						label={__("Auto Close", "payak-blocks")}
						checked={ autoclose }
						onChange={ () => setAttributes( { autoclose: !autoclose } ) }
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...innerBlocksProps } />
		</>
	);
}
