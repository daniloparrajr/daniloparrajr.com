import { registerBlockType } from '@wordpress/blocks';

import './style.scss';

/**
 * Internal dependencies
 */
import Edit from './edit';
import metadata from './block.json';
import icon from './icon';

registerBlockType( metadata.name, {
	icon,
	edit: Edit,
	save: ( { attributes } ) => {
		return attributes.content;
	},
} );
