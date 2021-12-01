const template = document.createElement('template');
template.innerHTML = `
	<style>
		h3 { color: red }
	</style>
	<div class="test-element">
		<h3></h3>
		<div class="info">
			<div><slot /></div>
			<div><slot name="email"></slot></div>
		</div>
		<button class="btn" id="hideMe">Hide Me</button>
	</div>
`;

class TestElement extends HTMLElement {
	constructor(){
		super();

		this.showInfo = true;

		this.attachShadow({ mode: 'open' });
		this.shadowRoot.appendChild(template.content.cloneNode(true));
		this.shadowRoot.querySelector('h3').innerText = this.getAttribute('name');
	}

	toggleInfoDiv(){
		this.showInfo = !this.showInfo;

		const info = this.shadowRoot.querySelector('.info');
		const btn = this.shadowRoot.querySelector('#hideMe');

		if(this.showInfo){
			info.style.display = 'block';
			btn.innerText = 'Hide Me';
		}else{
			info.style.display = 'none';
			btn.innerText = 'Show Me';
		}
	}

	connectedCallback(){
		this.shadowRoot.querySelector('#hideMe').addEventListener('click', () => this.toggleInfoDiv());

	}

	disconnectedCallback(){
		this.shadowRoot.querySelector('#hideMe').removeEventListener();
	}
}

window.customElements.define('test-element', TestElement);