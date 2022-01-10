function añadirElemento(){
   let elemento = document.createElement("li");
   let texto = document.createTextNode("Camisas");
   elemento.appendChild(texto);

   let lista = document.getElementById("lista");
   lista.appendChild(elemento);
}