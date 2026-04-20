/**
 * WordPress dependencies
 */
import { store, getContext, getElement } from '@wordpress/interactivity';

const { state, actions } = store( 'payak/accordion', {
	state: {
		get isOpen() {
			const { openItems, id } = getContext();
			return openItems.includes( id );
		}
	},
	actions: {
		toggle: () => {
			const context = getContext();
			const { id, autoclose } = context;

			if ( autoclose ) {
				context.openItems = state.isOpen ? [] : [ id ];
			} else if ( state.isOpen ) {
				context.openItems = context.openItems.filter(
					( item ) => item !== id
				);
			} else {
				context.openItems.push( id );
			}
		}
	},
	callbacks: {
		initIsOpen: () => {
			const context = getContext();
			const { id, openByDefault } = context;

			if ( openByDefault ) {
				context.openItems.push( id );
			}
		},
	},
} );
