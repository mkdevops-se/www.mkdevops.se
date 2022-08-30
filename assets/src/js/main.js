// eslint-disable-next-line import/no-unresolved
// eslint-disable-next-line import/no-unresolved
// eslint-disable-next-line import/no-unresolved
// eslint-disable-next-line import/no-unresolved,import/extensions
import LangSwitch from './_langSwitch';

const App = {

	/**
	 * App.init
	 */
	init() {
		// scripts
		function initLangSwitch() {
			return new LangSwitch();
		}
		initLangSwitch();
	}

};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
