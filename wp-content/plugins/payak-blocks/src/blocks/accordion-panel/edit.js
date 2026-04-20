import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

const TEMPLATE = [ [ 'core/paragraph' ] ];

import './editor.scss';

export default function Edit( props ) {
	const { attributes } = props;
	let { allowedBlocks } = attributes;

	const blockProps = useBlockProps( {
		className: 'eb-accordion-panel',
	} );

	return (
		<div className="eb-accordion-panel-wrapper">
			<div { ...blockProps }>
				<InnerBlocks
					allowedBlocks={ allowedBlocks }
					template={ TEMPLATE }
				/>
			</div>
		</div>
	);
}
