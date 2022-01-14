
class Contador extends HTMLElement {
    constructor (){
        super();
    }

    connectedCallback (){
        this.innerHTML = `<button onclick="sumar()">+</button><input type="text" value='0' id="contador"><button onclick="restar()">-</button>`;
    }

}
function restar() {
    let contador = document.getElementById('contador')
    contador.value = parseInt(contador.value)-1;
}

function sumar() {
    let contador = document.getElementById('contador')
    contador.value = parseInt(contador.value)+1;
}

window.customElements.define("contador-sum-res", Contador);