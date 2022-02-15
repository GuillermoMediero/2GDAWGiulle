class Contador extends HTMLElement {
    constructor (){
        super();
    }

    connectedCallback (){
        this.innerHTML = `<input type="text" id="valor" value="1"><br><br><button onclick="sumar()">+</button><input type="text" value='0' id="contador"><button onclick="restar()">-</button>`;
    }

}
function restar() {
    let contador = document.getElementById('contador')
    let valor = document.getElementById('valor').value;
    contador.value = parseInt(contador.value)-valor;
}

function sumar() {
    let valor = document.getElementById('valor').value;
    let contador = document.getElementById('contador')
    contador.value = parseInt(contador.value)+parseInt(valor);
}

window.customElements.define("contador-sum-res", Contador);