import { __ } from '@wordpress/i18n';

import {
	useBlockProps,
	useInnerBlocksProps,
	InspectorControls,
} from '@wordpress/block-editor';

import {
	PanelBody,
	ToggleControl,
	RangeControl,
	__experimentalInputControl as InputControl
} from '@wordpress/components';

const TEMPLATE = [
	[ 'payak-blocks/accordion-header' ],
	[ 'payak-blocks/accordion-panel' ],
];

import './editor.scss';

export default function Edit( props ) {
	const { attributes, setAttributes, clientId } = props;

	let {
		allowedBlocks,
		openByDefault,
		mapZoom,
		mapCenter,
		mapMarkers,
	} = attributes;

	const markerBaseId = 'eb-accordion-item-';

	const blockProps = useBlockProps( {
		className: 'eb-accordion-item',
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
	const onAddMarker = (newMarker) => {
		setAttributes({ mapMarkers: [...mapMarkers, newMarker] });
	};

	const onUpdateMarker = (newMarkers) => {
		setAttributes({mapMarkers: newMarkers});
	}

	const onRemoveMarker = (newMarkers) => {
		setAttributes({mapMarkers: newMarkers});
	};

	return (
		<>
			<InspectorControls>
				<PanelBody>
					<ToggleControl
						__nextHasNoMarginBottom
						label={ __( 'Open by default', 'payak-blocks' ) }
						checked={ openByDefault }
						onChange={ ( value ) =>
							setAttributes( { openByDefault: value } )
						}
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...innerBlocksProps } />
		</>
	);
}
