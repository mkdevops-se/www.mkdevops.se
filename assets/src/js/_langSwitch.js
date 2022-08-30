class LangSwitch {
	constructor() {
		this.switchLang();
	}

	// eslint-disable-next-line class-methods-use-this
	switchLang() {
		// script for lang switching

		const switcher = document.getElementById('lang-switch');
		const langLinks = document.querySelectorAll('.lang-link');


		const child = switcher.children;
		const eng = child[1];

		let isShow = false;

		switcher.addEventListener('click', (event) => {
			if (!isShow) {
				event.preventDefault();
				eng.classList.add('show');
				eng.style.display = 'list-item';
				eng.style.marginTop = '10px';
				// eslint-disable-next-line no-restricted-syntax
				for (const link of langLinks) {
					link.style.pointerEvents = 'auto';
				}
				isShow = true;
			} else {
				eng.classList.remove('show');
				eng.style.display = 'none';
				isShow = false;
			}
		});
	}
}

export default LangSwitch;
